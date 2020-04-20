 <div class="row w-100 h-100 p-0 m-0">
                                    <div class="col-4 p-2 w-100 h-100 m-0 d-flex flex-column justify-content-start align-item-center" id="add-catagory-div" style="overflow-y: scroll;">
                                        <span class="heading">Write catagory name</span>

                                        <form class="add-catagory-form" id="add-catagory-form">
                           
                           <div class="append_div_catagory">
                                <!-- KAMAL : PLEASE DO NOT CHANGE ANY ATTRIBUTE IN THIS INPUT  -->
                                            <input type="text" class="form-control catagory-input w-75" name="catagory_name_0" placeholder="atta" required="required" id="catagory-input">
                           </div>
                                           


                                        <div class="flex-center">

                                            <!-- submit this form btn -->
                                            <button class="add_catagory_form_sub_btn btn" id="add_catagory_form_sub_btn">
                                                Submit
                                            </button>
                                        </div>



                                        </form>



                                        

                                    </div>

                                    <div class="col-4 p-2 m-0 w-100 h-100" id="show-catagary-div">

                                        <!-- showing catagory table -->
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">S.No</th>
                                                    <th scope="col ">Catagory name</th>
                                                    <th scope="col ">Edit</th>
                                                    <th scope="col ">Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <!-- this tr row is for showing catagory data -->
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td class="name_catagory" id="name_catagory">Mark</td>
                                                    <td class="edit_catagory flex-center" id="edit_catagory">

                                                        <!-- this icon for edit -->
                                                        <i class="fa fa-edit " id="fa_edit_catagory" title="edit"></i>

                                                        <!-- this icon for save  -->
                                                        <i class="fa fa-save " id="fa_save_catagory" title="save"></i>
                                                    </td>
                                                    <td class="delete_catagaory">
                                                        <!-- this icon for delete -->
                                                        <i class="fa fa-trash" id="fa_delete_catagory"></i>
                                                    </td>
                                                </tr>
                                                <!-- end tr row -->

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
