
<script>

    $(document).on("click", ".love", function() {

        var reactionType = $(this).data("reaction-type");

        var postId = $(this).data("post-id");

        var commentId = $(this).data("comment-id");

        var userId = $(this).data("user-id");

        var icon = $(this).find(".change");

        var counter = $(this).find(".counter");

        if (!postId || !userId || !reactionType) {

            alert("error");

            return false; 

        }

        var url = '';

        var isReacted = icon.hasClass("fa-solid");

        if (reactionType === "post_react") {

            url = "like_dislike_post.php";

        } else if (reactionType === "save_post") {

            url = "save_post.php";

        } else if (reactionType === "comment_react") {

            url = "like_dislike_comment.php";

        }

        var button = $(this);

        button.prop('disabled', true); 

        var isRequestInProgress = false; 

        if (isRequestInProgress) {

            return false;

        }
        
        isRequestInProgress = true; 

        $.ajax({

            url: url,

            type: "POST",

            data: { 

                post_id: postId, 

                user_id: userId, 

                comment_id: commentId,

                is_reacted: isReacted

            },

            success: function(response) {

                try {

                    response = JSON.parse(response);

                    if (response.status === "reacted" || response.status === "comment-reacted") {

                        icon.removeClass("fa-regular").addClass("fa-solid");

                    } else if (response.status === "removed" || response.status === "comment-removed") {

                        icon.removeClass("fa-solid").addClass("fa-regular");

                    }

                    if (response.status === "saved" || response.status === "save_post") {

                        icon.removeClass("fa-regular").addClass("fa-solid");

                    } else if (response.status === "unsaved" || response.status === "save_post") {

                        icon.removeClass("fa-solid").addClass("fa-regular");

                    }

                    counter.text(response.new_like_count);

                } catch (e) {
                    
                }

            },

            error: function(xhr, status, error) {

            },

            complete: function() {

                button.prop('disabled', false); 

                isRequestInProgress = false; 

            }

        });

        return false; 
        
    });

</script>
