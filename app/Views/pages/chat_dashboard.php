<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Chat Dashboard</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/styles.css') ?>">
    <script type="text/javascript" src="<?= base_url('assets/jquery.min.js') ?>"></script>
</head>

<style>
    ::selection {
        background-color: #E13300;
        color: white;
    }

    ::-moz-selection {
        background-color: #E13300;
        color: white;
    }

    body {
        background-color: #fff;
        margin: 40px;
        font: 13px/20px normal Helvetica, Arial, sans-serif;
        color: #4F5155;
    }

    a {
        color: #003399;
        background-color: transparent;
        font-weight: normal;
    }

    h1 {
        color: #444;
        background-color: transparent;
        border-bottom: 1px solid #D0D0D0;
        font-size: 19px;
        font-weight: normal;
        margin: 0 0 14px 0;
        padding: 14px 15px 10px 15px;
    }

    code {
        font-family: Consolas, Monaco, Courier New, Courier, monospace;
        font-size: 12px;
        background-color: #f9f9f9;
        border: 1px solid #D0D0D0;
        color: #002166;
        display: block;
        margin: 14px 0 14px 0;
        padding: 12px 10px 12px 10px;
    }

    #body {
        margin: 0 15px 0 15px;
    }

    p.footer {
        text-align: right;
        font-size: 11px;
        border-top: 1px solid #D0D0D0;
        line-height: 32px;
        padding: 0 10px 0 10px;
        margin: 20px 0 0 0;
    }

    #container {
        margin: 10px;
        border: 1px solid #D0D0D0;
        box-shadow: 0 0 8px #D0D0D0;
    }

    #table-friend tr {
        height: 30px;
        background: #cddbde;
    }

    #table-friend tr a {
        text-decoration: none;
        padding-left: 20px;
        color: #444;
    }



    /* message box header styles*/

    .msg-wgt-container {
        position: fixed;
        bottom: 0;
        right: 20px;
        width: 250px;
        height: 300px;
        border: 1px solid #888888;
        background: #ffffff;
    }

    .minimize.msg-wgt-container {
        height: 29px;
    }

    .msg-wgt-header {
        width: 100%;
        height: 30px;
        line-height: 2.5em;
        text-align: center;
        background: #6f85b5
    }

    .msg-wgt-header a {
        color: #ffffff;
        text-decoration: none;
    }

    .msg-wgt-header a.online {
        width: 10px;
        height: 10px;
        background: #66d266;
        position: absolute;
        left: 10px;
        top: 10px;
        border-radius: 10px;
    }

    .msg-wgt-header a.close {
        position: absolute;
        right: 10px;
        opacity: .7
    }

    .msg-wgt-message-container {
        width: 100%;
        height: 230px;
        overflow-y: scroll;
    }

    .msg-wgt-message-list {
        width: 100%;
    }

    tr.msg-wgt-message-list-header {
        color: #999;
        font-size: 9px;
        vertical-align: top;
    }

    tr.msg-wgt-message-list-header img {
        width: 42px;
    }

    tr.msg-wgt-message-list-header .name {
        text-align: left;
    }

    tr.msg-wgt-message-list-header .time {
        text-align: right;
    }

    tr.msg-wgt-message-list-body td {
        font-size: 11px;
        color: #777;
    }

    tr.msg-wgt-message-list-separator td {
        border-bottom: 1px solid #ddd;
    }

    .msg-wgt-message-form {
        width: 100%;
        height: 40px;
        border-top: 1px solid #ddd;
    }

    .msg-wgt-message-form textarea {
        width: 98%;
        border: 0;
        height: 40px;
    }
</style>

<body>

    <div id="container">

        <div id="body">
            <p>Silahkan pilih teman:</p>
            <table style="width: 100%" id="table-friend">
                <?php foreach ($teman as $item) { ?>
                    <tr>
                        <td><a href="javascript:;" data-friend="<?= $item->id_user ?>"><?= $item->nama ?></a></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>


    <!-- TEMPLATE -->
    <div id="wgt-container-template" style="display: none">
        <div class="msg-wgt-container">
            <div class="msg-wgt-header">
                <a href="javascript:;" class="online"></a>
                <a href="javascript:;" class="name"></a>
                <a href="javascript:;" class="close">x</a>
            </div>
            <div class="msg-wgt-message-container">
                <table width="100%" class="msg-wgt-message-list">
                </table>
            </div>
            <div class="msg-wgt-message-form">
                <textarea name="message" placeholder="Type your message. Press Shift + Enter for newline"></textarea>
            </div>
        </div>
    </div>

    <script type="text/x-template" id="msg-template" style="display: none">
        <tbody>
        <tr class="msg-wgt-message-list-header">
            <td rowspan="2"><img src="<?= base_url('assets/avatar.png') ?>"></td>
            <td class="name"></td>
            <td class="time"></td>
        </tr>
        <tr class="msg-wgt-message-list-body">
            <td colspan="2"></td>
        </tr>
        <tr class="msg-wgt-message-list-separator"><td colspan="3"></td></tr>
    </tbody>
</script>

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            var chatPosition = [
                false, // 1
                false, // 2
                false, // 3
                false, // 4
                false, // 5
                false, // 6
                false, // 7
                false, // 8
                false, // 9
                false // 10
            ];

            // New chat
            $(document).on('click', 'a[data-friend]', function(e) {
                var $data = $(this).data();
                if ($data.friend !== undefined && chatPosition.indexOf($data.friend) < 0) {
                    var posRight = 0;
                    var position;
                    for (var i in chatPosition) {
                        if (chatPosition[i] == false) {
                            posRight = (i * 270) + 20;
                            chatPosition[i] = $data.friend;
                            position = i;
                            break;
                        }
                    }
                    var tpl = $('#wgt-container-template').html();
                    var tplBody = $('<div/>').append(tpl);
                    tplBody.find('.msg-wgt-container').addClass('msg-wgt-active');
                    tplBody.find('.msg-wgt-container').css('right', posRight + 'px');
                    tplBody.find('.msg-wgt-container').attr('data-chat-position', position);
                    tplBody.find('.msg-wgt-container').attr('data-chat-with', $data.friend);
                    $('body').append(tplBody.html());
                    initializeChat();
                }
            });

            // Minimize Maximize
            $(document).on('click', '.msg-wgt-header > a.name', function() {
                var parent = $(this).parent().parent();
                if (parent.hasClass('minimize')) {
                    parent.removeClass('minimize')
                } else {
                    parent.addClass('minimize');
                }
            });

            // Close
            $(document).on('click', '.msg-wgt-header > a.close', function() {
                var parent = $(this).parent().parent();
                var $data = parent.data();
                parent.remove();
                chatPosition[$data.chatPosition] = false;
                setTimeout(function() {
                    initializeChat();
                }, 1000)
            });

            var chatInterval = [];

            var initializeChat = function() {
                $.each(chatInterval, function(index, val) {
                    clearInterval(chatInterval[index]);
                });

                $('.msg-wgt-active').each(function(index, el) {
                    var $data = $(this).data();
                    var $that = $(this);
                    var $container = $that.find('.msg-wgt-message-container');

                    chatInterval.push(setInterval(function() {

                        var oldscrollHeight = $container[0].scrollHeight;
                        var oldLength = 0;
                        $.post('<?= site_url('chat/getChats') ?>', {
                            chatWith: $data.chatWith
                        }, function(data, textStatus, xhr) {
                            $that.find('a.name').text(data.name);
                            // from last
                            var chatLength = data.chats.length;
                            var newIndex = data.chats.length;
                            $.each(data.chats, function(index, el) {
                                newIndex--;
                                var val = data.chats[newIndex];

                                var tpl = $('#msg-template').html();
                                var tplBody = $('<div/>').append(tpl);
                                var id = (val.chat_id + '_' + val.send_by + '_' + val.send_to).toString();


                                if ($that.find('#' + id).length == 0) {
                                    tplBody.find('tbody').attr('id', id); // set class
                                    tplBody.find('td.name').text(val.name); // set name
                                    tplBody.find('td.time').text(val.time); // set time
                                    tplBody.find('.msg-wgt-message-list-body > td').html(nl2br(val.message)); // set message
                                    $that.find('.msg-wgt-message-list').append(tplBody.html()); // append message

                                    //Auto-scroll
                                    var newscrollHeight = $container[0].scrollHeight - 20; //Scroll height after the request
                                    if (newIndex === 0) {
                                        $container.animate({
                                            scrollTop: newscrollHeight
                                        }, 'normal'); //Autoscroll to bottom of div
                                    }
                                }
                            });
                        });
                    }, 1000));

                    $that.find('textarea').on('keydown', function(e) {
                        var $textArea = $(this);
                        if (e.keyCode === 13 && e.shiftKey === false) {
                            $.post('<?= site_url('chat/sendMessage') ?>', {
                                message: $textArea.val(),
                                chatWith: $data.chatWith
                            }, function(data, textStatus, xhr) {});
                            $textArea.val(''); // clear input

                            e.preventDefault(); // stop 
                            return false;
                        }
                    });
                });
            }
            var nl2br = function(str, is_xhtml) {
                var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br ' + '/>' : '<br>'; // Adjust comment to avoid issue on phpjs.org display
                return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1' + breakTag + '$2');
            }


            // on load
            initializeChat();
        });
    </script>

</body>

</html>