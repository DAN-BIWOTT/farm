
       
  <div id="id01" class="modal">


  	<div class="modal-content animated slideInDown">
  		<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal" style="margin-top: 3%;">&times;</span>

  			<img id="moha" src="#" style="position: absolute; width: 30%; top: 15%; left: 7%;">
  		

  		<form style="margin-left: 45%; margin-top: 2%;" method="POST" action="addproducedb.php" enctype="multipart/form-data"> 

   				      <label>Add a pic</label><br>
              <input type="file" onchange="readURL(this);" name="mybooks" ><br>

   			 	   	<input class="form-control form-control" type="text" name="name" placeholder="Name of the produce eg Mangoes" style="width: 100%; border-radius: 10px;">


               <select name="type" style="padding: 10px 25px; margin-bottom: 3%; border-radius: 5px; border:1px solid #D6D6D6;  width: 100%; margin-top: 3%; color: #8D8D8D;">
               <option value="vegetables">Vegetables</option>
               <option value="fruits">Fruits</option>
               <option value="dried">Dried</option>
               <option value="others">Others</option>
               
                </select>


   			 		


     			    <textarea style="margin-top: 1%; padding: 5% 5%; width: 100%; border-radius: 10px;" placeholder="Describe your produce eg How fresh it is" name="description"></textarea>

              <input class="form-control form-control" type="text" name="quantity" placeholder="Quantity" style="border-radius: 10px; width: 100%; margin-bottom: 4%; text-align: left;">

     		     	<input class="form-control form-control" type="number" name="amount" placeholder="Amount" style="border-radius: 10px;">

      				<input type="submit" style="margin-top: 5%;" class="btn btn-primary py-3 px-5" >	
 
 			 </form>


  			
  		</div>		
  	</div>

    <script type="text/javascript">
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#moha').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
