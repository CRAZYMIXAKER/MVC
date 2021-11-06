let params = new URL(document.location).searchParams;
if (params.get("id")) {
  swal({
    text: "Вы уверены, что хотите удалить эту статью?",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  }).then((willDelete) => {
    if (willDelete) {
      window.location = "index.php?c=delete&delete&id=" + params.get("id");
    } else {
      swal("Вы отменили удаление статьи").then((willDelete) => {
        if (willDelete) {
          window.location = "index.php?c=article&id=" + params.get("id");
        } else {
          window.location = "index.php?c=article&id=" + params.get("id");
        }
      });
    }
  });
} else if (params.get("success") == 1) {
  swal("Вы успешно удалили пользователя", {
    icon: "success",
  }).then((willDelete) => {
    if (willDelete) {
      window.location = "users.php";
    } else {
      window.location = "users.php";
    }
  });
} else if (params.get("success") == 0) {
  swal("Вы не можете себя удалить", {
    icon: "error",
  }).then((willDelete) => {
    if (willDelete) {
      window.location = "users.php";
    } else {
      window.location = "users.php";
    }
  });
}
