// let params = new URL(document.location).searchParams;
var deleteLink = document.getElementById("delete");

deleteLink.addEventListener("click", function () {
  if (id) {
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
          window.location = "/article/delete/" + id;
        });
      } else {
        swal("Вы отменили удаление статьи").then((willDelete) => {
          if (willDelete) {
            window.location = "/article/article/" + id;
          } else {
            window.location = "/article/article/" + id;
          }
        });
      }
    });
  }
});
