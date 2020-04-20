  <div class="row w-100 h-100 p-0 m-0">

                                    <div class="col-9 w-100 h-100 p-0 m-0  ">
                                        <!-- ******************** product form start ******************** -->
                                       
                                      <form class="add-product-form h-100 p-0 m-0" id="add-product-form">

                                        <div class="row w-100 h-100 p-0 m-0">

                                                <!-- start 1st column of this tab -->
                                                <div class="col-6 w-100 h-100 p-0 m-0  " style="overflow: scroll;">
                                                    <table class="table" style="">

                                                        <tbody>
                                                            <!-- product id -->
                                                            <tr>
                                                                <th class=" flex-center"> Product id </th>
                                                                <th class="product_id p-0" id="product_id"> 1209</th>
                                                            </tr>


                                                            <!-- choose catagory -->
                                                            <tr>
                                                                <td class=" flex-center"> Catagory </td>
                                                                <td class=" p-0">

                                                                    <!-- from database -->
                                                                    <select class="form-control s_c_for_product" id="s_c_for_product">
                                                                        <option>Choose catagory</option>
                                                                    </select>
                                                                </td>
                                                            </tr>

                                                            <!-- choose brand -->
                                                            <tr>
                                                                <td class=" flex-center"> Brand </td>
                                                                <td class=" p-0">

                                                                    <!-- from database -->
                                                                    <select class="form-control s_b_for_product " id="s_b_for_product" name="">
                                                                        <option>Choose brand</option>
                                                                    </select>
                                                                </td>
                                                            </tr>

                                                            <!-- Product name -->
                                                            <tr>
                                                                <td class=" flex-center">Name </td>
                                                                <td class=" p-0">
                                                                    <input type="text" class="form-control product_name" id="product_name" name="" placeholder="Name" required="required">
                                                                </td>
                                                            </tr>

                                                            <!-- search keyword -->
                                                            <tr>
                                                                <td class=" flex-center">keyword </td>
                                                                <td class=" p-0">
                                                                    <input type="text" class="form-control search-keyword" id="search-keyword" name="" placeholder="Search keyword" required="required">
                                                                </td>
                                                            </tr>

                                                             <!-- Product name -->
                                                            <tr>
                                                                <td class=" flex-center"> discription </td>
                                                                <td class=" p-0">

                                                                  <textarea  class="form-control product-discription" id="product-discription" name="" placeholder="Product discription" required="required" cols="2" rows="2" ></textarea>
                                                                   
                                                                </td>
                                                            </tr>
                                                             
                                                             <!-- upload photo -->
                                                             <tr style="width: 100%">
                                                                <td class=" flex-center"> Photo </td>
                                                                <td class=" p-0" style="width: 62%">
                                                                    <input type="file"  accept="image/*" class="form-control upload_product_photo" id="upload_product_photo" name="" placeholder="takatak" required="required">
                                                                </td>
                                                            </tr>

                                                 
                                                 


                                                        </tbody>
                                                    </table>
                                                     <div class="dis_product_pic flex-center w-100" >
                                                      <img src="" id="dis_product_pic_img" style="border: 1px solid black" width="90%">
                                                    </div>

                                                </div>
                                                <!-- end 1st column of this tab -->

                                                <!--   START 2nd column of this tab -->
                                                <div class="col-6 w-100 h-100 border p-0 m-0">
                                                    <span class="heading">
                                                        Sell details of the product
                                                    </span>

                                                    <table class="table p-0 m-0 border" style="">

                                                        <tbody>

                                                            <!--  Quantity -->
                                                            <tr>

                                                                <td class=" flex-center"> Sell Quantity </td>
                                                                <td class=" p-0">
                                                                    <input type="number" class="form-control sell_quantity" id="sell_quantity" name="" placeholder="Quantity" required="required">
                                                                </td>
                                                            </tr>

                                                            <!-- sell Unit  -->
                                                            <tr>

                                                                <td class=" flex-center"> Sell Unit </td>
                                                                <td class=" p-0">
                                                                    <select class="form-control sell_unit" id="sell_unit">
                                                                        <option>kg</option>
                                                                        <option>liter</option>
                                                                        <option>gram</option>
                                                                        <option>ml</option>
                                                                        <option>pack</option>

                                                                    </select>
                                                                </td>
                                                            </tr>

                                                            <!--  Sell price -->
                                                            <tr>

                                                                <td class=" flex-center"> Sell price (RS) </td>
                                                                <td class=" p-0">
                                                                    <input type="number" class="form-control sell_price" id="sell-price" name="" placeholder="price" required="required">
                                                                </td>
                                                            </tr>

                                                            <!-- selling tax  -->
                                                            <tr>

                                                                <td class=" flex-center"> Sell tax in % </td>
                                                                <td class=" p-0">
                                                                    <input type="number" class="form-control sell_tax" id="sell_tax" name="" placeholder="tax" required="required">
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>

                                                    <span class="heading">
                                                        Base details of the product
                                                    </span>

                                                    <table class="table" style="">

                                                        <tbody>

                                                            <!--  Quantity -->
                                                            <tr>

                                                                <td class=" flex-center"> Base Quantity </td>
                                                                <td class=" p-0">
                                                                    <input type="number" class="form-control base_quantity" id="base_quantity" name="" placeholder="Quantity" required="required">
                                                                </td>
                                                            </tr>

                                                            <!-- sell Unit  -->
                                                            <tr>

                                                                <td class=" flex-center"> Base Unit </td>
                                                                <td class=" p-0">
                                                                    <select class="form-control base_unit" id="base_unit">
                                                                        <option>kg</option>
                                                                        <option>liter</option>
                                                                        <option>gram</option>
                                                                        <option>ml</option>
                                                                        <option>pack</option>

                                                                    </select>
                                                                </td>
                                                            </tr>

                                                            <!--  Base price -->
                                                            <tr>

                                                                <td class=" flex-center"> Base price (RS) </td>
                                                                <td class=" p-0">
                                                                    <input type="number" class="form-control base_price" id="base_price" name="" placeholder="price" required="required">
                                                                </td>
                                                            </tr>

                                                            <!-- selling tax  -->
                                                            <!-- <tr>

                                                                <td class=" flex-center"> Base tax in % </td>
                                                                <td class=" p-0">
                                                                    <input type="number" class="form-control base_tax" id="base_tax" name="" placeholder="t" required="required">
                                                                </td>
                                                            </tr>
 -->
                                                            <!--   -->
                                                            <tr>

                                                                <td class=" flex-center"> total stock </td>
                                                                <td class=" p-0">
                                                                    <input type="number" class="form-control total_stock" id="total_stock" name="" placeholder="total stock" required="required">
                                                                </td>
                                                            </tr>





                                                        </tbody>
                                                    </table>
                                                  
                                        <div class="flex-center">

                                            <!-- submit this form btn -->
                                            <button class="add_product_form_sub_btn btn" id="add_product_form_sub_btn">
                                                Submit
                                            </button>
                                        </div>


                                                   


                                                </div>
                                        </div>
                                             </form>
                         <!-- ****************** product form end ******************************** -->
                                    </div>      
                                    <!-- end 2nd column of this tab -->

                                    <!-- start 3rd column of this tab -->
                                    <div class="col-3 w-100 h-100 p-0 m-0"></div>
                                    <!-- end 3rd column of this tab -->

                                </div>