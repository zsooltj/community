/**
 * post js
 *
 * @package Sngine
 * @author Zamblek
 */

// initialize API URLs
/* live */

api["posts/point"] = ajax_path + "posts/pointsystem.php";

$("body").on("click", ".js_add_one", function (e) {
  e.preventDefault();
  var post = $(this);
  var id = post.data("authorid");
  alert(id);
  console.log("bejott", post);
  var amount = 20;

  $.post(
    api["posts/point"],
    { do: "add_one_user_point", id: id, amount: amount },
    function (response) {
      /* check the response */
    },
    "json"
  ).fail(function () {
    modal("#modal-message", {
      title: __["Error"],
      message: __["There is something that went wrong!"],
    });
  });
});
