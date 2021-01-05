$(document).ready(function(){
    var codeEditorElement = $(".codemirror-textarea")[0];
    var editor = CodeMirror.fromTextArea(codeEditorElement, {
        mode: "application/x-httpd-php",
        lineNumbers: true,
        matchBrackets: true,
        theme: "ambiance",
        lineWiseCopyCut: true,
        undoDepth: 200
    });
    editor.setValue("<?php\n\n\/\/ Write your code below:\n\n");

    $(document).on('click', '#run', function(e){
        e.preventDefault();
        $("#error").html("").hide();
        var editorCode = editor.getValue();
        if(editorCode != ''){

            let filename = create_UUID() + ".php";

            $.ajax({
                url: 'file-write.php',
                type: 'POST',
                dataType: 'json',
                data: {"input":editorCode, "filename": filename},
                success:function(response){
                },
                complete:function(){
                    $.ajax({
                        url: filename,
                        success:function(response){                            
                            $("#result").html(response);                            
                        },
                        complete: function() {
                            $.ajax({
                                url: 'delete-file.php',
                                type: 'POST',
                                dataType: 'json',
                                data: {"filename": filename},
                                success:function(){ }
                            })
                        }
                    });
                }
            });

        } else{
            $("#error").html("Code should not be empty").show();
        }

    });

    $(document).on('click', '#clear', function(e){
        e.preventDefault();
        $("#error").html("").hide();
        editor.setValue('');
    });

    $(document).on('click', '#refresh', function(e){
        e.preventDefault();
        $("#error").html("").hide();
        location.reload();
    });
});

function create_UUID(){
    var dt = new Date().getTime();
    var uuid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
        var r = (dt + Math.random()*16)%16 | 0;
        dt = Math.floor(dt/16);
        return (c=='x' ? r :(r&0x3|0x8)).toString(16);
    });
    return uuid;
}