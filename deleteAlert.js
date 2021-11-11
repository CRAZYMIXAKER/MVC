let params = new URL(document.location).searchParams;
var deleteLink = document.getElementById("delete");

deleteLink.addEventListener("click", function () {
  if (params.get("querysystemurl")) {
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
          window.location =
            "index.php?f=article&c=delete&id=" + params.get("id");
        });
      } else {
        swal("Вы отменили удаление статьи").then((willDelete) => {
          if (willDelete) {
            window.location =
              "index.php?f=article&c=article&id=" + params.get("id");
          } else {
            window.location =
              "index.php?f=article&c=article&id=" + params.get("id");
          }
        });
      }
    });
  }
});
