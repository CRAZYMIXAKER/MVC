let params = new URL(document.location).searchParams;
var deleteLink = document.getElementById("delete");

deleteLink.addEventListener("click", function () {
  if (params.get("")) {
    swal({
      text: "Вы уверены, что хотите удалить эту статью?",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    }).then((willDelete) => {
      if (willDelete) {
        swal("Вы успешно удалили статью", {
          icon: "success",
        }).then(() => {
          window.location = "/article/delete/" + params.get("id");
        });
      } else {
        swal("Вы отменили удаление статьи").then((willDelete) => {
          if (willDelete) {
            window.location = "article/article/" + params.get("id");
          } else {
            window.location = "article/article/" + params.get("id");
          }
        });
      }
    });
  }
});
