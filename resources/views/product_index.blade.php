<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product based task</title>
    

    <style>
        *{
    margin: 0px;
    padding: 0px;
            }
            li{
                list-style:none;
            }
          .container{
                margin-left:20px;
                margin-right: 20px;
                /* background-color: aliceblue; */
                height:50px; 
              
            }
            .header {
            margin-top: 20px    ;
            display:flex;
            align-items: center;
            justify-content: space-between;
    
           }
           .login_register_btn{
            margin-right:31px;
           }
           .inner_login_register{
            display: flex;
            margin-top: 10px;;
            align-items: center;
            padding:5px;
            border:3px  groove; #8c8987;
            gap:10px;
            color:#4c4e52;
            /* background-color: rgb(12, 102, 102); */
           }
           .logo,.title{
            margin-top: 10px;
           }
           
           .sec_2{
            margin-left:20px;
            margin-right:20px;
            /* width:100%; */
            display:flex;
            align-items:center;
            height:30px;
            margin:10px;
            /* gap:8px; */
            padding:10px;

            border-top:1px solid black;
            border-bottom:1px solid black;
         
           }

           li{
              border-right:1px solid black;
              display:flex;
              /* justify-content:center */
              height:50px;
              align-items:center
           }
           li p{
            padding:10px;
           }
           button{
            background:none;
            border:none;
            margin-top:15px;
          
           }
           input{
            border:none;
            width:40vh;
            padding:10px;
            margin-bottom:10px;
           }


           li:hover{
            /* height:50px; */
            background-color:black;
            color:white;
           }
           /* search bar start */
           .exapmle,.text{
            border:none;
            padding:10px;
           }
           .search_bar{
            display:flex;
           

           }
           /* search bar end */
           /* image section start */
           .container_3{
            margin-left:20px;
            margin-right:20px;
            width:28%;
            
           }
           
           .men{
            height:380px;
            width:380px;
        
           }
          
           .size_color{
            display:flex;
            justify-content:space-between;
            margin-top:10px;
           }

           .img_attachment{
            display:flex;
            align-items:center;
            justify-content:space-between;
            background-color:black;
            width:380px;
            height:40px;
            color:white;
           
           }
           /* image section end */

        .dot {
           
        border-radius: 50%;
        width: 20px;
        height: 20px;
        padding: 5px;
        
        border: 1px solid #000;
    
        text-align: center;
        font: 18px Arial, sans-serif;
           }
        .dot_color,.dot_color_1,.dot_color_2,.dot_color_3{
        border-radius: 50%;
        width: 20px;
        height: 20px;
        padding: 5px;
        margin-left:5px;
       
        border: 1px solid #000;
       
           }
           .dot_color_1{
               background-color:#776de3
           }
           .dot_color_3{
            background-color:#f58c8c
        }
        .dot_color_2{
            background-color:#f09d4f
        }
        

.bottom_img_content{
    margin-top:10px;
}
.col{
    width:30%;
    /* border:1px solid red; */
}
.men_image{
  height:400px;
  width:376px;

}
.fetch_on_image{
    
    
    margin-top:-50px;
    z-index:10;
    background-color:black;
    display:flex;
    align-items:center;
    justify-content:space-between;
   
}
.fetch_on_image span{
    margin-left:20px;
    margin-right:20px;
}
.cart_img{
    padding-top:6px;
}
.col_size p,.col_color p{
    color:#6e706f;

}





    </style>
</head>
<body>
     <!-- header section start -->
    <div class="container">
        <header class="header">
            <div class="logo"><img src="logo.svg" alt=""></div>
            <div class="title">
                <h2>FAITH FULLBRAND</h2>
            </div>
            <div class="login_register_btn">
                <div class="inner_login_register">
                    <div class="div">
                        <p onclick="">Login</p>
                    </div>
                    <div class="div">
                        <p>|</p>
                    </div>
                    <div class="div">
                        <P>Register</P>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <!--  -->
    

    <!--  -->
     <!-- header section start -->


    <!-- header section start product name-->
    <!-- <div class="container_1"> -->
        <div class="sec_2"> 
            <li class="category_1"><p>MEN'S</p></li>
            <li class="category_2"><P>KID'S</P></li>
            <li class="category_3"><P>SPORTSWEAR</P></li>
            <li class="category_4"><P>DRESSES</P></li>
            <li class="category_5"><P>HOME</P></li>
            <li class="category_6"><P>ACCESSORIES</P></li>
            <li class="category_7"><P>SLEEPWEAR</P></li>
            <li class="category_8"><P>WOMEN'S</P></li>
            <div class="search_bar">
                 <!-- Load icon library -->
    <!-- The form -->

            <form class="example" action="">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit">
                <img src="search.svg" alt="">
            </button>
             </form> 
            <div style="display:flex;align-items:center;margin-left:5px;"> 
                    <span class="category_10"><p><a href="">CART</a>
                    </p></span>
                    <span class='cart_img'>
                       <img src="cart.svg" alt="can't load">
                    </span>
            </div>

           </div>
            
         </div>
    <!-- </div> -->

     <!-- header section start product name-->
     


     <!-- main images with details -->
    
      <div style="margin-left:20px;margin-right:20px;"class="section">
        <div class="row" style="display:flex; gap:50px;">
            <div style=""class="col">
                <div class="image" >
                    <div class="div" >
                        <img class="men_image"src="product.png" alt="">
                        <div class="fetch_on_image" style="margin-top:-63px;color:white;height:60px;background-color:black;z-index:100;isolation:isolate">
                                <span >RS.100</span>
                                <span style="display:flex;align-items:center; gap:10px;">
                                        <div class="p" style="background-color:black;">
                                     <img src="bag.svg" alt="">
                                        </div>
                                        <div class="p" >ADD CART</div>
                                </span>
                   </div>
                    </div>
                    <div class="product_text" style="margin-top:10px;"><p>Product1</p></div>
                    <div class="size_color"style="margin-top:px">
                        <div class="col_size" style="">
                            <div><p>SIZE</p></div>
                            <div style="margin-top:20px;"> 
                                <span class="dot">29</span>
                                <span class="dot">39</span>
                                <span class="dot">56</span>
                                <span class="dot">35</span>
                            </div>
                        </div>
                        <div class="col_color" >
                            <div><p>COLOR</p></div>
                            <div style="margin-top:15px;margin-left:1px;display:flex;"> 
                                <span class="dot_color_1" ></span>
                                <span class="dot_color_2" ></span>
                                <span class="dot_color_3" ></span>
                            </div>

                        </div>
                    </div>   
                   

                     
                    
                </div>

            </div>
            <div style=""class="col">
                <div class="image" >
                    <div class="div" >
                        <img class="men_image"src="product.png" alt="">
                        <div class="fetch_on_image" style="margin-top:-63px;color:white;height:60px;background-color:black;z-index:100;isolation:isolate">
                                <span >RS.100</span>
                                <span style="display:flex;align-items:center; gap:10px;">
                                        <div class="p" style="background-color:black;">
                                     <img src="bag.svg" alt="">
                                        </div>
                                        <div class="p" >ADD CART</div>
                                </span>
                   </div>
                    </div>
                    <div class="product_text" style="margin-top:10px;"><p>Product1</p></div>
                    <div class="size_color"style="margin-top:px">
                        <div class="col_size" style="">
                            <div><p>SIZE</p></div>
                            <div style="margin-top:20px;"> 
                                <span class="dot">29</span>
                                <span class="dot">39</span>
                                <span class="dot">56</span>
                                <span class="dot">35</span>
                            </div>
                        </div>
                        <div class="col_color" >
                            <div><p>COLOR</p></div>
                            <div style="margin-top:15px;margin-left:1px;display:flex;"> 
                                <span class="dot_color_1" ></span>
                                <span class="dot_color_2" ></span>
                                <span class="dot_color_3" ></span>
                            </div>

                        </div>
                    </div>   
                   

                     
                    
                </div>

            </div>
            <div style=""class="col">
                <div class="image" >
                    <div class="div" >
                        <img class="men_image"src="product.png" alt="">
                        <div class="fetch_on_image" style="margin-top:-63px;color:white;height:60px;background-color:black;z-index:100;isolation:isolate">
                                <span >RS.100</span>
                                <span style="display:flex;align-items:center; gap:10px;">
                                        <div class="p" style="background-color:black;">
                                     <img src="bag.svg" alt="">
                                        </div>
                                        <div class="p" >ADD CART</div>
                                </span>
                   </div>
                    </div>
                    <div class="product_text" style="margin-top:10px;"><p>Product1</p></div>
                    <div class="size_color"style="margin-top:px">
                        <div class="col_size" style="">
                            <div><p>SIZE</p></div>
                            <div style="margin-top:20px;"> 
                                <span class="dot">29</span>
                                <span class="dot">39</span>
                                <span class="dot">56</span>
                                <span class="dot">35</span>
                            </div>
                        </div>
                        <div class="col_color" >
                            <div><p>COLOR</p></div>
                            <div style="margin-top:15px;margin-left:1px;display:flex;"> 
                                <span class="dot_color_1" ></span>
                                <span class="dot_color_2" ></span>
                                <span class="dot_color_3" ></span>
                            </div>

                        </div>
                    </div>   
                   

                     
                    
                </div>

            </div>
            
        </div>
        
        <div class="row" style="display:flex; margin-top:20px;gap:50px;">
            <div style=""class="col">
                <div class="image" >
                    <div class="div" >
                        <img class="men_image"src="product.png" alt="">
                        <div class="fetch_on_image" style="margin-top:-63px;color:white;height:60px;background-color:black;z-index:100;isolation:isolate">
                                <span >RS.100</span>
                                <span style="display:flex;align-items:center; gap:10px;">
                                        <div class="p" style="background-color:black;">
                                     <img src="bag.svg" alt="">
                                        </div>
                                        <div class="p" >ADD CART</div>
                                </span>
                   </div>
                    </div>
                    <div class="product_text" style="margin-top:10px;"><p>Product1</p></div>
                    <div class="size_color"style="margin-top:px">
                        <div class="col_size" style="">
                            <div><p>SIZE</p></div>
                            <div style="margin-top:20px;"> 
                                <span class="dot">29</span>
                                <span class="dot">39</span>
                                <span class="dot">56</span>
                                <span class="dot">35</span>
                            </div>
                        </div>
                        <div class="col_color" >
                            <div><p>COLOR</p></div>
                            <div style="margin-top:15px;margin-left:1px;display:flex;"> 
                                <span class="dot_color_2"></span>
                                <span class="dot_color_3"></span>
                                <span class="dot_color_1"></span>
                            </div>

                        </div>
                    </div>   
                   

                     
                    
                </div>

            </div>
            <div style=""class="col">
                <div class="image" >
                    <div class="div" >
                        <img class="men_image"src="product.png" alt="">
                        <div class="fetch_on_image" style="margin-top:-63px;color:white;height:60px;background-color:black;z-index:100;isolation:isolate">
                                <span >RS.100</span>
                                <span style="display:flex;align-items:center; gap:10px;">
                                        <div class="p" style="background-color:black;">
                                     <img src="bag.svg" alt="">
                                        </div>
                                        <div class="p" >ADD CART</div>
                                </span>
                   </div>
                    </div>
                    <div class="product_text" style="margin-top:10px;"><p>Product1</p></div>
                    <div class="size_color"style="margin-top:px">
                        <div class="col_size" style="">
                            <div><p>SIZE</p></div>
                            <div style="margin-top:20px;"> 
                                <span class="dot">29</span>
                                <span class="dot">39</span>
                                <span class="dot">56</span>
                                <span class="dot">35</span>
                            </div>
                        </div>
                        <div class="col_color" >
                            <div><p>COLOR</p></div>
                            <div style="margin-top:15px;margin-left:1px;display:flex;"> 
                                <span class="dot_color_1"></span>
                                <span class="dot_color_2"></span>
                                <span class="dot_color_3"></span>
                            </div>

                        </div>
                    </div>   
                   

                     
                    
                </div>

            </div>
            <div style=""class="col">
                <div class="image" >
                    <div class="div" >
                        <img class="men_image"src="product.png" alt="">
                        <div class="fetch_on_image" style="margin-top:-63px;color:white;height:60px;background-color:black;z-index:100;isolation:isolate">
                                <span >RS.100</span>
                                <span style="display:flex;align-items:center; gap:10px;">
                                        <div class="p" style="background-color:black;">
                                     <img src="bag.svg" alt="">
                                        </div>
                                        <div class="p" >ADD CART</div>
                                </span>
                   </div>
                    </div>
                    <div class="product_text" style="margin-top:10px;"><p>Product1</p></div>
                    <div class="size_color"style="margin-top:px">
                        <div class="col_size" style="">
                            <div><p>SIZE</p></div>
                            <div style="margin-top:20px;"> 
                                <span class="dot">29</span>
                                <span class="dot">39</span>
                                <span class="dot">56</span>
                                <span class="dot">35</span>
                            </div>
                        </div>
                        <div class="col_color" >
                            <div><p>COLOR</p></div>
                            <div style="margin-top:15px;margin-left:1px;display:flex;"> 
                                <span class="dot_color_3" style="background-color:#c7d7f2;"></span>
                                <span class="dot_color_2" style="background-color:#f0f2c7;"></span>
                                <span class="dot_color_1" style="background-color:#616962;"></span>
                            </div>

                        </div>
                    </div>   
                   

                     
                    
                </div>

            </div>
            
        </div>
      </div>
     <!-- main images with details -->
    
</body>
</html>

                