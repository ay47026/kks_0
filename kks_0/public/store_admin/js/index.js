
$(document).ready(function(){


	function create_catagory(form,field,f_class,){

//  by dealt form submition close  
         document.getElementById("add-catagory-form").addEventListener("submit", function(e){
            e.preventDefault();
               });
	
    
    // count = 1 becouse one input filed already created in form so this field has count =0
		var count = 1;

		// focus on element when page load
	var i = document.getElementsByClassName("catagory-input");
	setTimeout(function(){ 
            i[0].focus();
	    	 }, 5);

	// focus on element when click on tab add catagory
	    $("#add-catagory-tab").click(function(){
	    	setTimeout(function(){ 
            i[0].focus();
	    	 }, 5);
	    });


	function create_new_input(){
		i[count-1].addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();

   // name attribute dynamic change with name="catagory_name_'+count+'"  
 var input = '<input type="text" class="form-control catagory-input w-75" name="catagory_name_'+count+'" id="catagory-input" placeholder="atta" required="required">';
	  $(".append_div_catagory").append(input);
	  count = count + 1;

	  setTimeout(function(){ 
	  	 i[count-1].focus();

	  	 // delete input field
	  		if (count>2) {
	  			
            i[count-1].addEventListener("keyup",function(event){
               if (event.keyCode === 46){
               	this.remove();
               	i[count-2].focus();
               	count--; 
               	 
               }
            });
	  		}
	  		// special for 2nd index input deletion
	  		else{
                  i[1].addEventListener("keyup",function(event){
               if (event.keyCode === 46){
               	this.remove();
               	i[0].focus();
               	count--; 
               	 
               }
            });
	  		}
           
	    	 }, 5);

	  // here this call for recurtion to execute same code again
	   create_new_input();

  }
});

	}

	create_new_input();



	}

	create_catagory();
// end create catagory

// create brand 

function create_brand(){


//  by dealt form submition close  
         document.getElementById("add-brand-form").addEventListener("submit", function(e){
            e.preventDefault();
               });
	
    
    // count = 1 becouse one input filed already created in form so this field has count =0
		var count = 1;

		// focus on element when page load
	var i = document.getElementsByClassName("brand-input");
	
	// focus on element when click on tab add brand
	    $("#add-brand-tab").click(function(){
	    	setTimeout(function(){ 
            i[0].focus();
	    	 }, 50);
	    });


	function create_new_input(){
		i[count-1].addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();

   // name attribute dynamic change with name="brand_name_'+count+'"  
 var input = '<input type="text" class="form-control brand-input w-75" name="brand_name_'+count+'" id="brand-input" placeholder="atta" required="required">';
	  $(".append_div_brand").append(input);
	  count = count + 1;

	  setTimeout(function(){ 
	  	 i[count-1].focus();

	  	 // delete input field
	  		if (count>2) {
	  			
            i[count-1].addEventListener("keyup",function(event){
               if (event.keyCode === 46){
               	this.remove();
               	i[count-2].focus();
               	count--; 
               	 
               }
            });
	  		}
	  		// special for 2nd index input deletion
	  		else{
                  i[1].addEventListener("keyup",function(event){
               if (event.keyCode === 46){
               	this.remove();
               	i[0].focus();
               	count--; 
               	 
               }
            });
	  		}
           
	    	 }, 5);

	  // here this call for recurtion to execute same code again
	   create_new_input();

  }
});

	}

	create_new_input();



}
create_brand();


// edit  catagory code start  **************************************************
function edit_c_b(){
	$("#fa_edit_brand,#fa_edit_catagory").each(function(){
	$(this).click(function(){
	    var edit_icon = this;
		var name_catagory = this.parentElement.parentElement.children[1];
         name_catagory.contentEditable = true;
         name_catagory.style.backgroundColor = "#FFF";
         name_catagory.focus(); 
         var save_icon = this.nextElementSibling;   
         this.style.display = "none";
         save_icon.style.display = "block";

         save_icon.addEventListener("click",function(){
         	  name_catagory.contentEditable = false;
         	  name_catagory.style.backgroundColor = "";
         	   this.style.display = "none";
         	   edit_icon.style.display = "block";
         });
       

	});
});
}

edit_c_b();


// delete catagoory  code start
function delete_c_b(){
	$("#fa_delete_brand,#fa_delete_catagory").each(function(){
   $(this).click(function(){
        var remove_row = this.parentElement.parentElement;
        remove_row.remove(); 
   });
});   

}
delete_c_b();

// product phpto display code
function upload_pro_pic(){
	 document.getElementById("upload_product_photo").addEventListener("change",function(){
	 	var file = this.files[0];
	 	var reader = new FileReader();
 	if(file){
 		reader.readAsDataURL(file);
 	}
	 	reader.addEventListener("load",function(){
	 		document.getElementById("dis_product_pic_img").src = reader.result;
	 	})
	 });
}
upload_pro_pic();

// prodct search select code
function f_product_search_type(){
	document.getElementById("product_search_type").addEventListener("change",function(){
      var p_s_t = this.value;
      document.getElementById("search_product_field").setAttribute("placeholder",p_s_t);
	}) ;
}

f_product_search_type();


// edit product details double click
function edit_p_d_double_click(){
   $(".e_c").each(function(){
       $(this).dblclick(function (){
            var td = this;
            // selete td
          td.contentEditable = true;
         td.style.backgroundColor = "white";
         td.focus();
         $("#fa_edit_pro").css("display","none");
           $("#fa_save_pro").css("display","block");
             $("#fa_save_pro").css("color","blue");

         // deselete td
         $(this).blur(function(){
         td.contentEditable = false;
         td.style.backgroundColor = "";
         $("#fa_edit_pro").css("display","block");
           $("#fa_save_pro").css("display","none");
             $("#fa_save_pro").css("color","");
         });
       
       // save the edit data
         $("#fa_save_pro").click(function(){
         	  td.contentEditable = false;
         td.style.backgroundColor = "";
           $("#fa_edit_pro").css("display","block");
             $("#fa_save_pro").css("display","none");
         });

    //       td.addEventListener("keypress",function(event){

    //       	   if (!(event.which == 115 && event.ctrlKey) && !(event.which == 19)) return true;
    // alert("Ctrl-S pressed");
    // event.preventDefault();
    // return false;
    //         });
           

       });
   });
}
edit_p_d_double_click();


// delete product details 
function delete_p_d_double_click(){
	$(".s_r").each(function(){
		$(this).click(function(){
			  var row = this.parentElement.parentElement;

			if (this.checked) {
         		 row.style.backgroundColor = "pink";
          		 $("#fa_delete_pro").css("color","red");

           // delete
          $("#fa_delete_pro").click(function(){
          	    row.remove();
          	    $("#fa_delete_pro").css("color","");
                             });
			}

			else{
				row.style.backgroundColor = "";
          $("#fa_delete_pro").css("color","");
			}
        
         
            // deselete td
		});

		;
	});
	
}



delete_p_d_double_click();

function select_all_row(){
	$("#s_a_r").click(function(){
		$(".s_r").click();
	});
}

select_all_row();
});