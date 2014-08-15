// global for item to delete
var findDel;
var saveWord

// AJAX TO CALL LOAD AND GET RESULTS
(function(){

	console.log('init ran');


    $.ajax({  
		type : "POST",  
		url : "php/load.php" ,  
		traditional : true,    
		type : "json", // added this line
		success : function(arrayPHP){  

			for(i=1; i<arrayPHP.length; i++){


			var aIndex = $.inArray(arrayPHP[i], arrayPHP);

			console.log('loading items...'); 
			$("#saved ol").append('<li onclick="removeMe()" data-icon="delete" id=' + aIndex + '>' + '<a href="#" id="close" class="ui-btn ui-btn-icon-right ui-icon-delete">' + arrayPHP[i] +'</a>' + '</li>');

			
			} // for			
		} // success  
	 	}); // ajax  
   		



	
}) (); // self init function




// SAVE CONTENT TO TXT FILE

// which to onclick

function arse(){

	saveWord = $('#contenty').val()


	$.ajax({
   	  type: "POST",
      url:'php/save.php',
      data: {ss : saveWord},
      complete: function () {
          console.log("saving ran"); 
      },

      error: function () {
          console.log('Bummer: there was an error!');
      },
  });
  return false;




} // saveMe



// removes the item with 'X' next to it

function removeMe(){
	
	console.log("click x called");
	var target = $(event.target); 

	if ( target.is( "a" ) ) {
    var x = target.text(); 

    target.parent().remove(); 
    findDel = x; 
    console.log("you're deleting: " + findDel);
    killTask();
    
  	} // if



} // remove




// delete the item with 'X' next to it

function killTask() {

   console.log('kill loading'); 
   $.ajax({
   	  type: "POST",
      url:'php/kill.php',
      data: {ff : findDel},
      complete: function () {
          console.log("killTask ran"); 
      },

      error: function () {
          console.log('Bummer: there was an error!');
      },
  });
  return false;
} // kill function