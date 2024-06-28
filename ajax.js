// Insert data start here...

$(".insert").click(function () {
  // alert("click me ok...!");
  //   console.log(click);

  var name = $("#name").val();
  var email = $("#email").val();
  var contact = $("#contact").val();
  var password = $("#password").val();
  // alert(name);

  $.ajax({
    method: "POST",
    url: "insert.php",
    data: { name: name, email: email, contact: contact, password: password },
    success: function (data) {
      // $("#reload").html(data);
      // alert(data);
      read();
    },
  });
}); // Insert data close here...

// Read data start here...

function read() {
  var read = "";
  $.ajax({
    url: "read.php",
    method: "POST",
    data: { read: read },
    success: function (data) {
      $("#tbody").html(data);
    },
  });
}
// Read data closed here...

//  Data delete function start here...

function Delete(userId) {
  // alert(userId);
  //for confermation message
  $confermation = confirm("Are you sure...?");
  if ($confermation == true) {
    $.ajax({
      method: "POST",
      url: "delete.php",
      data: { userId: userId },
      success: function () {
        read();
      },
    });
  }
}
//  Data delete function closed here...

//  Data EDIT function start here...

function edit(userId) {
  // alert(userId);

  $.ajax({
    method: "GET",
    url: "edit.php",
    data: { userId: userId },
    success: function (data) {
      $("body").html(data);
      // alert(data);
    },
  });
}
//  Data EDIT function closed here...

//  Data UPDATE function START here...

function UPDATE_DATA(userId) {
  var name = $("#name").val();
  var email = $("#email").val();
  var contact = $("#contact").val();
  var password = $("#password").val();
  // alert(name);

  $.ajax({
    method: "GET",
    url: "update.php",
    data: {
      name: name,
      email: email,
      contact: contact,
      password: password,
      userId: userId,
    },
    success: function (data) {
      // $("#reload").html(data);
      alert(data);
      // read();
    },
  });
}
//  Data UPDATE function closed here...

//read button....
$(".reading").click(function () {
  var read = "";
  $.ajax({
    url: "read.php",
    method: "POST",
    data: { read: read },
    success: function (data) {
      $("#tbody").html(data);
    },
  });
});

// Go to home from edit page by button

function home() {
  var read = "";
  $.ajax({
    url: "index.php",
    method: "POST",
    data: { read: read },
    success: function (data) {
      $("body").html(data);
    },
  });
}
