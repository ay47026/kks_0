<div class="row w-100 h-100 p-0 m-0">

                                    <!-- start cloumn in this tab -->
                                    <div class="col-4 p-2 w-100 h-100 m-0 d-flex flex-column justify-content-start align-item-center" id="add-catagory-div" style="overflow-y: scroll;">

                                        <form class="add-brand-form" id="add-brand-form">

                                            <!-- **KAMAL : DISPLAY ALL CATAGORY IN THIS SELECT FROM CATAGORY TABLE -->
                                            <!-- choose catagory -->
                                            <select class="form-control s_c_for_brand w-75" id="s_c_for_brand">
                                                <option>Choose catagory</option>
                                                <option>Atta</option>
                                            </select>

                                            <span class="heading">Add brands name</span>
                                               
                                                   <div class="append_div_brand">
                                            <!-- KAMAL : PLEASE DO NOT CHANGE ANY ATTRIBUTE IN THIS INPUT  -->
                                            <input type="text" class="form-control brand-input w-75" name="brand_name_0" placeholder="dove" required="required" id="brand-input">
                                        </div>



                                            <div class="d-flex flex-row justify-content-center">
                                                <!-- submit this form btn -->
                                                <button class="add_brand_form_sub_btn btn" id="add_brand_form_sub_btn">
                                                    Submit
                                                </button>
                                            </div>


                                        </form>
                                    </div>
                                    <!-- end 1st column in this field -->

                                    <!-- **start 2nd column in this field -->
                                    <div class="col-4 p-2 m-0 w-100 h-100" id="show-brand-div">


                                        <!-- **KAMAL : DISPLAY ALL CATAGORY IN THIS SELECT FROM Brand TABLE -->
                                        <!-- choose catagory -->
                                        <select class="form-control s_c_for_display_brand w-75" id="s_c_for_display_brand">
                                            <option>Choose catagory</option>
                                        </select>

                                        <!-- ** showing brand name from brand table -->
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">S.No</th>
                                                    <th scope="col ">Brand name</th>
                                                    <th scope="col ">Edit</th>
                                                    <th scope="col ">Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td class="name_brand" id="name_brand"> Dove </td>
                                                    <td class="edit_brand flex-center" id="edit_brand">
                                                        <i class="fa fa-edit" title="edit" id="fa_edit_brand"></i>
                                                        <i class="fa fa-save " title="save" id="fa_save_brand"></i>
                                                    </td>
                                                    <td class="delete_brand ">
                                                        <i class="fa fa-trash" id="fa_delete_brand"></i>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>