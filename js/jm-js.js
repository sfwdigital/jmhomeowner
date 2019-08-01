jQuery(function($) {
  $(window).on('load', function(){

    //
    // if (Cookies.get('progress') == 'find' ){
    //   // $("#insulationdata").load( "intro.php" );
    //   window.location.href = "/";
    //
    // }
    // else if (Cookies.get('progress') == 'project'){
    //   window.location.href = "project.php";
    //
    //   // $("#insulationdata").load( "menu.php" );
    // }
    // else if (Cookies.get('progress') == 'details'){
    //   // $("#insulationdata").load( "attic.php" );
    //   window.location.href = "attic.php";
    //
    // }
    // else if (Cookies.get('progress') == 'map'){
    //   window.location.href = "map.php";
    //
    //   // $("#insulationdata").load( "map.php" );
    // }
  });




  $('.thehouse > .room').click(function() {
    $( ".room" ).removeClass( "room-selected" );
    $(this).addClass('room-selected');
    title = $(this).attr('id');
    var proper_title = $(this).data("room-title");
    var room_copy = $(this).data("room-text");
    $( ".room-card h5" ).html(proper_title);
    $( ".card-content p" ).html(room_copy);
  });


  $( "#getstarted" ).click(function() {
    window.location.href = "project.php";

    // $("#insulationdata").load( "menu.php" );
    Cookies.set('progress', 'project');

  });

  $( "#next-button" ).click(function() {
    console.log('test');
    if (Cookies.get('progress') == "project"){
      // $("#insulationdata").load( "attic.php" );
      Cookies.set('progress', 'details');
      window.location.href = "attic.php";

      // var rvalue = $('#location-field').val();
      // Cookies.set('rvalue', rvalue);
      //
      // var project = document.querySelector('.room-selected').id;
      // Cookies.set('project', project);
      //
      //
      // var link = 'attic.php';
      // $.fn.jminsulation(link, rvalue, project);
    }

    else if (Cookies.get('progress') == "details"){
      // $("#insulationdata").load( "map.php" );
      window.location.href = "map.php";

      Cookies.set('progress', 'map');
      //
      // var rvalue = $('#location-field').val();
      // Cookies.set('rvalue', rvalue);
      //
      // var project = document.querySelector('.room-selected').id;
      // Cookies.set('project', project);
      //
      // var link = 'attic.php';
      // $.fn.jminsulation(link, rvalue, project);
    }

     if (Cookies.get('progress') == "details"){
      // var link = 'map.php';
      // $.fn.jminsulation(link, rvalue, project);
    }
  });

  $( "#back-button" ).click(function() {
     if (Cookies.get('progress')  == "map"){
       Cookies.set('progress', 'details');
      // $("#insulationdata").load( "attic.php" );
      window.location.href = "attic.php";

    }
    else if (Cookies.get('progress') == 'details'){
      Cookies.set('progress', 'project');
      // $("#insulationdata").load( "menu.php" );
      window.location.href = "project.php";

    }
    else if (Cookies.get('progress') == 'project'){
      Cookies.set('progress', 'find');
      // $("#insulationdata").load( "intro.php" );
      window.location.href = "/";

    }
  });

  $.fn.jminsulation = function(link, rvalue, project) {
    $.ajax({
      type: "POST",
      url: link,
      data: ({rvalue: rvalue, project: project}),
      success: function(response){
        // $("#insulationdata").html(response);
      }
    });
  }

});
