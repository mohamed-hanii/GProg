
<script>

    $(document).ready(function() {
        
        scrollToBottom();
        
        var sender_id = <?php echo $user_data['id']; ?>;  

        var addedMessagesIds = [];  

        var lastMessageId = 0;  

        $(document).on("change", "#file-upload", function() {

        var file = $("#file-upload")[0].files[0];

        var fileName = file ? file.name : '';

        var fileType = file ? file.type : '';
        
        if (file && !fileType.startsWith('image/') && !fileType.startsWith('video/')) {

            alert("Only images and videos are allowed.");

            $("#file-upload").val(''); 

            $('#file-name').html('');  
            
            return;

        }

        if (file) {

            var fileDisplayName = file.name;

            var fileIcon = fileType.startsWith('image/') ? '<i class="fas fa-image"></i>' : 

                        fileType.startsWith('video/') ? '<i class="fas fa-video"></i>' : '';

            $('#file-name').html(`

                <div class="file-display">

                    ${fileIcon} ${fileDisplayName}

                </div>

            `);

        } else {

            $('#file-name').html('');  
            
        }

    });

        function fetchMessages() {

            var receiverId = <?php echo $user_chat_data['id']; ?>;  

            $.ajax({

                url: 'fun/get_messages.php',

                type: 'GET',

                data: { 

                    receiver_id: receiverId,

                    last_message_id: lastMessageId 

                },

                success: function(response) {

                    try {

                        var responseData = JSON.parse(response);

                        if (responseData.status === 'success') {

                            var newMessages = responseData.messages;

                            newMessages.forEach(function(message) {

                                if (!addedMessagesIds.includes(message.message_id)) {

                                    var newMessage = createMessageHTML(message); 

                                    $('#message-box').append(newMessage);  

                                    scrollToBottom();

                                    addedMessagesIds.push(message.message_id);

                                    lastMessageId = message.message_id;

                                }

                            });

                            if (responseData.allMessagesLoaded) {

                                clearInterval(fetchMessagesInterval);  

                            }

                        } else {

                        }

                    } catch (error) {

                    }

                },

                error: function(xhr, status, error) {

                }

            });

        }

        setInterval(fetchMessages, 100);

        $(document).on("click", "#send-message-btn", function() {

        removefile()

        var messageText = $("#message-input").val();  

        var receiverId = <?php echo $user_chat_data['id']; ?>;

        var fileInput = $("#file-upload")[0];

        var file = fileInput.files.length > 0 ? fileInput.files[0] : null;

        if (!messageText && !file) {

            alert("Please enter a message or upload a file.");

            return;

        }

        var formData = new FormData();

        formData.append("message_text", messageText);  

        formData.append("receiver_id", receiverId);    

        if (file) {

            formData.append("file", file);  
            
        }

        $.ajax({

            url: "fun/send_message.php",

            type: "POST",

            data: formData,

            processData: false,

            contentType: false,

            success: function(response) {

                var res = JSON.parse(response);

                if (res.status === "sent") {

                    $("#message-input").val('');

                    $("#file-upload").val(''); 

                    addedMessagesIds.push(res.message_id);

                    clearInterval(fetchMessagesInterval);

                    fetchMessagesInterval = setInterval(fetchMessages, 200);

                    fetchMessages();

                }

            },

            error: function(xhr, status, error) {

            }

        });

    });

    function createMessageHTML(message) {

        var isSent = String(message.sender_id) === String(sender_id);

        var messageHTML = '<div class="message ' + (isSent ? 'sent' : 'received') + ' d-flex justify-content-' + (isSent ? 'end' : 'start') + '">';

        messageHTML += '<img src="uploads/' + message.profile_img + '" class="ms-2" style="width:40px !important; height:40px !important; border-radius: 25% !important; ">';
        
        messageHTML += '<div class="message-content">';

        if (message.file) {

            var fileExtension = message.file.split('.').pop().toLowerCase();

        if (['jpg', 'jpeg', 'png', 'gif', 'bmp'].includes(fileExtension)) {

            messageHTML += '<img src="uploads/' + message.file + '" class="message-media" style="border-radius: 13px; width:100%;height:auto;">';
        
        } 

        else if (['mp4', 'avi', 'mov', 'mkv'].includes(fileExtension)) {
            
            messageHTML += '<video controls class="message-media" style="border-radius: 13px; width:100%;height:auto;"><source src="uploads/' + message.file + '" type="video/mp4"></video>';
        
        } 

            else {

                messageHTML += '<div class="unsupported-file">Unsupported file type</div>';

            }

        } 

        if (message.message_text.trim() !== '') {

        messageHTML += '<p class="mm">' + message.message_text + '</p>';

    } else if (!message.file) {

        messageHTML += '<div class="unsupported-file">No content</div>';

    }

        messageHTML += '<div class="message-time">' + message.sent_at + '</div>';

        messageHTML += '</div></div>';

        return messageHTML;

    }

        function scrollToBottom() {

            var messageBox = $('#message-box');

            messageBox.scrollTop(messageBox[0].scrollHeight);

        }

        function removeTypingStatus() {

            $('#typing-status').text('');

        }

        function removefile() {

            $('#file-name').text('');

        }
        
    });

</script>

