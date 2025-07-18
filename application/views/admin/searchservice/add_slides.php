<style>
        .form-container {
            background-color: #f5f5f5;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .input-row {
            display: flex;
            margin-bottom: 15px;
            align-items: center;
        }
        .input-field {
            flex: 1;
            margin-right: 10px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            background-color: #0066cc;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
        }
        button:hover {
            background-color: #0055aa;
        }
        .remove-btn {
            background-color: #ff4444;
        }
        .remove-btn:hover {
            background-color: #cc0000;
        }
        .add-row-btn {
            background-color: #28a745;
        }
        .add-row-btn:hover {
            background-color: #218838;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #0066cc;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    
</style>
<section class="content">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="box">
                	<div class="box-header with-border">
                    	<div class="box-title">
                        	<a href="<?php echo base_url('admin/searchservice/slides_list') ;?>">
                            	<button class="btn btn-sm btn-success"><i class="fa fa-plus"></i>Presentation List</button>
                        	</a>
                        </div>
                    </div>
                    <div class="box-body">
						<form id="dynamicForm" action="<?php echo base_url('admin/searchservice/insert_slides/');?>" enctype="multipart/form-data" method="POST">
                        	<div class="row form-group">
                               
                                <div class="col-sm-12 col-md-12">
                                    <div class="row form-group">
                                        <label class="col-sm-12 col-md-2 col-form-label">Select Project <span class="text-danger">*</span></label>
                                        <div class="col-sm-12 col-md-8">
                                           <select class="form-control" name="project_id"  required>
                                            <?php if(!empty($servilist)){
                                                foreach($servilist as $value){ ?>
                                                 <option value="<?php echo $value['id']; ?>"><?php echo $value['sub_service']; ?></option>
                                            <?php } }?>
                                           
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                          <div class="col-md-6 col-12">
                                             <h4>Add All Project Image :</h4>
                                        <div id="inputContainer4">
                                            <!-- Initial row -->
                                            <div class="input-row">
                                                <div class="input-field">
                                                    <input type="file" placeholder="Registration Process" name="images[]" required>
                                                </div>
                                                
                                                <button type="button" class="remove-btn" onclick="removeRow4(this)">Remove</button>
                                            </div>
                                        </div>
                                        
                                        <button type="button" class="add-row-btn" onclick="addNewRow4()">Add New Row</button>
                                          </div>
                                           <div class="col-md-6 col-12">
                                             <h4>Technology used project :</h4>
                                        <div id="inputContainer5">
                                            <!-- Initial row -->
                                            <div class="input-row">
                                                <div class="input-field">
                                                    <input type="text" placeholder="Programming language" name="tech[]" required>
                                                </div>
                                                
                                                <button type="button" class="remove-btn" onclick="removeRow5(this)">Remove</button>
                                            </div>
                                        </div>
                                        
                                        <button type="button" class="add-row-btn" onclick="addNewRow5()">Add New Row</button>
                                          </div>
                                       
                                       <div class="col-md-12">
                                        <label for="">Project Description</label>
                                        <textarea name="description" id="description" class="form-control" id="product"></textarea>
                                       </div>
                                        <button type="submit btn-block">Submit Data</button>
                                 
                                
                            </div>
                        </form>                    
                    </div>
               	</div>
         	</div>
       	</div>
    </section>
    <!-- /.content -->
     <script src="<?php echo base_url("/assets/ckeditor4-4.22.1/ckeditor.js"); ?>"></script>
        <script src="<?php echo base_url("/assets/ckeditor4-4.22.1/config.js"); ?>"></script>
    <script>
        CKEDITOR.replace('description');
    </script>

   <script>
        // Array to store the submitted data
        let coursesData = [];
        let idCounter = 1;
        
        // Function to add a new input row
      
       
        // third event
       function addNewRow4() {
            const container = document.getElementById('inputContainer4');
            const newRow = document.createElement('div');
            newRow.className = 'input-row';
            
            newRow.innerHTML = `
                 <div class="input-field">
                                                    <input type="file" placeholder="Registration Process" name="images[]" required>
                                                </div>
                                                <button type="button" class="remove-btn" onclick="removeRow4(this)">Remove</button>
            `;
            
            container.appendChild(newRow);
        }
        
        // Function to remove an input row
        function removeRow4(button) {
            const inputRows = document.querySelectorAll('.input-row');
            
            // Only remove if there's more than one row
            if (inputRows.length > 1) {
                button.parentElement.remove();
            } else {
                alert("At least one row is required!");
            }
        }
            // first round of event
             function addNewRow5() {
            const container = document.getElementById('inputContainer5');
            const newRow = document.createElement('div');
            newRow.className = 'input-row';
            
            newRow.innerHTML = `
                 <div class="input-field">
                                                    <input type="text" placeholder="Documents Required" name="tech[]" required>
                                                </div>
                                                <button type="button" class="remove-btn" onclick="removeRow5(this)">Remove</button>
            `;
            
            container.appendChild(newRow);
        }
        
        // Function to remove an input row
        function removeRow5(button) {
            const inputRows = document.querySelectorAll('.input-row');
            
            // Only remove if there's more than one row
            if (inputRows.length > 1) {
                button.parentElement.remove();
            } else {
                alert("At least one row is required!");
            }
        }
            // first round of event
    
    </script>
    