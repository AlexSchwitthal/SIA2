 //
 //  function validate(evt) {
 //   var theEvent = evt || window.event;
 //
 //   // Handle paste
 //   if (theEvent.type === 'paste') {
 //       key = event.clipboardData.getData('text/plain');
 //   } else {
 //   // Handle key press
 //       var key = theEvent.keyCode || theEvent.which;
 //       key = String.fromCharCode(key);
 //   }
 //   var regex = /[0-9]|\./;
 //   if( !regex.test(key) ) {
 //     theEvent.returnValue = false;
 //     if(theEvent.preventDefault) theEvent.preventDefault();
 //   }
 // }
   //
   // $(document).ready(function() {
   //   $('#tb1').dataTable({searching: false, paging: false, info: false});
   // } );
$(document).ready(function() {
  $('#adherentsInscrits').dataTable( {
      "bPaginate": false,
      "bFilter": false,
      "bInfo": false
  });

  $('#adherentsAttente').dataTable( {
      "bPaginate": false,
      "bFilter": false,
      "bInfo": false
  });

  $('#etudiants').dataTable( {
      "bPaginate": false,
      "bFilter": false,
      "bInfo": false
  });

  $(".fg-toolbar").hide();
});
