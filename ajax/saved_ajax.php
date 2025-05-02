
<script>

    $(document).on("click", ".love", function() {

        var reactionType = $(this).data("reaction-type");

        var postId = $(this).data("post-id");

        var userId = $(this).data("user-id");

        var icon = $(this).find(".change");

        var counter = $(this).find(".counter");

        if (!postId || !userId || !reactionType) {

            alert("error");

            return;

        }

        var url = '';

        var isReacted = icon.hasClass("fa-solid");

        if (reactionType === "post_react") {

            url = "like_dislike_post.php";

        } else if (reactionType === "save_post") {

            url = "save_post.php";
            
        }

        var button = $(this);

        button.prop('disabled', true);

        $.ajax({

            url: url,

            type: "POST",

            data: { 

                post_id: postId, 

                user_id: userId, 

                is_reacted: isReacted

            },

            success: function(response) {

                try {

                    response = JSON.parse(response);

                    if (response.status === "reacted") {

                        icon.removeClass("fa-regular").addClass("fa-solid");

                    } else if (response.status === "removed") {

                        icon.removeClass("fa-solid").addClass("fa-regular");

                    }

                    if (response.status === "saved") {

                        icon.removeClass("fa-regular").addClass("fa-solid");

                    } else if (response.status === "unsaved") {

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

            }

        });

    });

</script>


