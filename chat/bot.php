<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Chatbot in PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
        /* HTML: <div class="loader"></div> */
        .loader {
            width: fit-content;
            font-weight: bold;
            font-family: monospace;
            font-size: 20px;
            background: radial-gradient(circle closest-side, #000 94%, #0000) right/calc(200% - 1em) 100%;
            animation: l24 1s infinite alternate linear;
        }

        .loader::before {
            content: "Loading...";
            line-height: 1em;
            color: #0000;
            background: inherit;
            background-image: radial-gradient(circle closest-side, #fff 94%, #000);
            -webkit-background-clip: text;
            background-clip: text;
        }

        @keyframes l24 {
            100% {
                background-position: left
            }
        }
    </style>
</head>

<body>
    <button type="button" class="btn btn-primary" style="position: fixed;bottom: 4px;right:10px;" data-toggle="modal" data-target="#exampleModal">
        Chat
    </button>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <form action="javascript:void(0);">
            <div class="modal-dialog chat-body" role="document">
                <div class="modal-content wrapper" class="modal-dialog" role="document">
                    <div class="title">
                        Simple Online Chatbot
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <div class="form">

                        <div class="bot-inbox inbox">
                            <div class="icon">
                                <i class="fa fa-user-o" aria-hidden="true"></i>

                            </div>
                            <div class="msg-header">
                                <p>Hello there, how can I help you?</p>
                            </div>
                        </div>

                    </div>
                    <div class="typing-field">
                        <div class="input-data">
                            <input id="data" type="text" placeholder="Type something here..">
                            <button type="submit" id="send-btn">Send</button>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>


    <script>
        // run();

        function run() {
            $("#send-btn").click();


        }
        $(document).ready(function() {
            $("#send-btn").on("click", function() {




                var value = $("#data").val();

                if(value!="")
                {
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + value + '</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');

                // start ajax code

                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: {
                        text: value,

                    },
                    beforeSend: function() {

                        $(".form").append(('<div class="response_product"><div class="loader"></div></div>'));
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    },
                    dataType: 'JSON',
                    success: function(response) {

                        setTimeout(function() {

                            $(".form").append($('.response_product').html(''));
                            var flag = response.flag;
                            var result = response.replay;


                            var replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fa fa-user-o" aria-hidden="true"></i></div><div class="msg-header"><p>' + result + '</p></div></div>';
                            $(".form").append(replay);
                            // when chat goes down the scroll bar automatically comes to the bottom


                            //    $('#response').fadeOut("slow");  
                            $(".form").scrollTop($(".form")[0].scrollHeight);
                        }, 2000);

                    }
                });
            }
            else{
                alert('Please enter your message');
            }

            });
        
        });
    </script>

</body>

</html>