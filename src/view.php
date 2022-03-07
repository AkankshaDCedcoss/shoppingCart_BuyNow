<?php

if(!isset($_SESSION['addThiscart']))
{
    $_SESSION['addThiscart']=array();
}
if(!isset($_SESSION['buynowThis']))
{
    $_SESSION['buynowThis']=array();
}






if(isset($_POST['addtocart0']))
{
    $index='<img src="images/pr.jpg" width="20px">';
    $p=101;
    $q='Price : $ 100 ';

    $thiscart=array($index,$p,$q,1);
    if(count($_SESSION['addThiscart']) ==0)
    {
        array_push($_SESSION['addThiscart'],$thiscart);
    }
    else{
        $_SESSION['checkthis']=0;
        for($i=0;$i <count($_SESSION['addThiscart']);$i++)
        {
         if($_SESSION['addThiscart'][$i][1]==101)
             {
               $_SESSION['checkthis']=1;
               $_SESSION['addThiscart'][$i][3]++;
}
}
        if( $_SESSION['checkthis']==1)
{

}
else{
    array_push($_SESSION['addThiscart'],$thiscart);
}


        
    }
}



if(isset($_POST['addtothiscart']))
{
    $index='<img src="images/product1.jpg" width="20px">';
    $p=102;
    $q='Price : $ 120 ';

    $thiscart=array($index,$p,$q,1);
    if(count($_SESSION['addThiscart']) ==0)
    {
        array_push($_SESSION['addThiscart'],$thiscart);
    }
    else{
        $_SESSION['checkthis']=0;
        for($i=0;$i <count($_SESSION['addThiscart']);$i++)
        {
if($_SESSION['addThiscart'][$i][1]==102)
{
    $_SESSION['checkthis']=1;
    $_SESSION['addThiscart'][$i][3]++;
}
        }
        if( $_SESSION['checkthis']==1)
{

}
else{
    array_push($_SESSION['addThiscart'],$thiscart);
}


        
    }
}
if(isset($_POST['addtocart2']))
{
    $index='<img src="images/product2.webp" width="20px">';
    $p=103;
    $q='Price : $ 110 ';

    $thiscart=array($index,$p,$q,1);
    if(count($_SESSION['addThiscart']) ==0)
    {
        array_push($_SESSION['addThiscart'],$thiscart);
    }
    else{
        $_SESSION['checkthis']=0;
        for($i=0;$i <count($_SESSION['addThiscart']);$i++)
        {
if($_SESSION['addThiscart'][$i][1]==103)
{
    $_SESSION['checkthis']=1;
    $_SESSION['addThiscart'][$i][3]++;
}
        }
        if( $_SESSION['checkthis']==1)
{

}
else{
    array_push($_SESSION['addThiscart'],$thiscart);
}


        
    }
}
if(isset($_POST['addtocart3']))
{
    $index='<img src="images/product4.jpg" width="20px">';
    $p=104;
    $q='Price : $ 150 ';

    $thiscart=array($index,$p,$q,1);
    if(count($_SESSION['addThiscart']) ==0)
    {
        array_push($_SESSION['addThiscart'],$thiscart);
    }
    else{
        $_SESSION['checkthis']=0;
        for($i=0;$i <count($_SESSION['addThiscart']);$i++)
        {
if($_SESSION['addThiscart'][$i][1]==104)
{
    $_SESSION['checkthis']=1;
    $_SESSION['addThiscart'][$i][3]++;
}
        }
        if( $_SESSION['checkthis']==1)
{

}
else{
    array_push($_SESSION['addThiscart'],$thiscart);
}


        
    }
}
if(isset($_POST['addtocart4']))
{
    $index='<img src="images/product5.jpg" width="20px">';
    $p=105;
    $q='Price : $ 130 ';

    $thiscart=array($index,$p,$q,1);
    if(count($_SESSION['addThiscart']) ==0)
    {
        array_push($_SESSION['addThiscart'],$thiscart);
    }
    else{
        $_SESSION['checkthis']=0;
        for($i=0;$i <count($_SESSION['addThiscart']);$i++)
        {
if($_SESSION['addThiscart'][$i][1]==105)
{
    $_SESSION['checkthis']=1;
    $_SESSION['addThiscart'][$i][3]++;
}
        }
        if( $_SESSION['checkthis']==1)
{

}
else{
    array_push($_SESSION['addThiscart'],$thiscart);
}


        
    }
}



//buy now


if(isset($_POST['buynow0']))
{
    $index='<img src="images/pr.jpg" width="20px">';
    $p=101;
    $q='Price : $ 100 ';

    $thiscart=array($index,$p,$q,1);
    if(count($_SESSION['buynowThis']) ==0)
    {
        array_push($_SESSION['buynowThis'],$thiscart);
    }
    else{
        $_SESSION['checkthis']=0;
        for($i=0;$i <count($_SESSION['buynowThis']);$i++)
        {
if($_SESSION['buynowThis'][$i][1]==101)
{
    $_SESSION['checkthis']=1;
    $_SESSION['buynowThis'][$i][3]++;
}
        }
        if( $_SESSION['checkthis']=1)
{

}
else{
    array_push($_SESSION['buynowThis'],$thiscart);
}


        
    }
}



if(isset($_POST['buynowThis']))
{
    $index='<img src="images/product1.jpg" width="20px">';
    $p=102;
    $q='Price : $ 120 ';

    $thiscart=array($index,$p,$q,1);
    if(count($_SESSION['buynowThis']) ==0)
    {
        array_push($_SESSION['buynowThis'],$thiscart);
    }
    else{
        $_SESSION['checkthis']=0;
        for($i=0;$i <count($_SESSION['buynowThis']);$i++)
        {
if($_SESSION['buynowThis'][$i][1]==102)
{
    $_SESSION['checkthis']=1;
    $_SESSION['buynowThis'][$i][3]++;
}
        }
        if( $_SESSION['checkthis']==1)
{

}
else{
    array_push($_SESSION['buynowThis'],$thiscart);
}


        
    }
}
if(isset($_POST['buynow2']))
{
    $index='<img src="images/product2.webp" width="20px">';
    $p=103;
    $q='Price : $ 110 ';

    $thiscart=array($index,$p,$q,1);
    if(count($_SESSION['buynowThis']) ==0)
    {
        array_push($_SESSION['buynowThis'],$thiscart);
    }
    else{
        $_SESSION['checkthis']=0;
        for($i=0;$i <count($_SESSION['buynowThis']);$i++)
        {
if($_SESSION['buynowThis'][$i][1]==103)
{
    $_SESSION['checkthis']=1;
    $_SESSION['buynowThis'][$i][3]++;
}
        }
        if( $_SESSION['checkthis']==1)
{

}
else{
    array_push($_SESSION['buynowThis'],$thiscart);
}


        
    }
}
if(isset($_POST['buynow3']))
{
    $index='<img src="images/product4.jpg" width="20px">';
    $p=104;
    $q='Price : $ 150 ';

    $thiscart=array($index,$p,$q,1);
    if(count($_SESSION['buynowThis']) ==0)
    {
        array_push($_SESSION['buynowThis'],$thiscart);
    }
    else{
        $_SESSION['checkthis']=0;
        for($i=0;$i <count($_SESSION['buynowThis']);$i++)
        {
if($_SESSION['buynowThis'][$i][1]==104)
{
    $_SESSION['checkthis']=1;
    $_SESSION['buynowThis'][$i][3]++;
}
        }
        if( $_SESSION['checkthis']==1)
{

}
else{
    array_push($_SESSION['buynowThis'],$thiscart);
}


        
    }
}
if(isset($_POST['buynow4']))
{
    $index='<img src="images/product5.jpg" width="20px">';
    $p=105;
    $q='Price : $ 130 ';

    $thiscart=array($index,$p,$q,1);
    if(count($_SESSION['buynowThis']) ==0)
    {
        array_push($_SESSION['buynowThis'],$thiscart);
    }
    else{
        $_SESSION['checkthis']=0;
        for($i=0;$i <count($_SESSION['buynowThis']);$i++)
        {
if($_SESSION['buynowThis'][$i][1]==105)
{
    $_SESSION['checkthis']=1;
    $_SESSION['buynowThis'][$i][3]++;
}
        }
        if( $_SESSION['checkthis']==1)
{

}
else{
    array_push($_SESSION['buynowThis'],$thiscart);
}


        
    }
}






function displayAddToCart()
{
echo " <table><tr><th>image</th><th>id</th><th>price</th><th>quantity</th></tr>";
echo "<button type='submit' name='removeall1'>Remove All</button>";
echo "<button type='submit' name='add1'>add All in Buy</button>";


$i=0;
foreach($_SESSION['addThiscart'] as $key => $value)
{
    echo "
    <tr>
    <td>$value[0]</td>
    <td>$value[1]</td>
    <td>$value[2]</td>
    <td>$value[3]</td>
    <td><input type='text' name='text".$i."' value=''></td>
    <td><input type='submit' name='edit".$i."' value='Edit'></td>
    <td><input type='submit' name='delet".$i."' value='Delete'></td>
    <td><input type='submit' name='movetobuy".$i."' value='MoveToBuy'></td>
    
    
    </tr>";
    $i++;
}
echo "</table>";

}




function displayBuyNow()
{
echo " <table><tr><th>image</th><th>id</th><th>price</th><th>quantity</th></tr>";
echo "<button type='submit' name='removeall2'>Remove All</button>";
echo "<button type='submit' name='add2'>add All in Buy</button>";


$i=0;
foreach($_SESSION['buynowThis'] as $key => $value)
{
    echo "
    <tr>
    <td>$value[0]</td>
    <td>$value[1]</td>
    <td>$value[2]</td>
    <td>$value[3]</td>
    <td><input type='text' name='textt".$i."' value=''></td>
    <td><input type='submit' name='editt".$i."' value='Edit'></td>
    <td><input type='submit' name='delett".$i."' value='Delete'></td>
    <td><input type='submit' name='movetobuyy".$i."' value='MoveToCart'></td>
    
    
    </tr>";
    $i++;
}
echo "</table>";

}





for($k=0;$k <count($_SESSION['addThiscart']);$k++)
{
if(isset($_POST['movetobuy'.$k]))
{
    array_push($_SESSION['buynowThis'],$_SESSION['addThiscart'][$k]);
    array_splice($_SESSION['addThiscart'],$k,1);
}




}


for($k=0;$k <count($_SESSION['buynowThis']);$k++)
{
if(isset($_POST['movetobuyy'.$k]))
{
    array_push($_SESSION['addThiscart'],$_SESSION['buynowThis'][$k]);
    array_splice($_SESSION['buynowThis'],$k,1);
}




}



for($k=0;$k <count($_SESSION['addThiscart']);$k++)
{
if(isset($_POST['delet'.$k]))
{
    
    
    array_splice($_SESSION['addThiscart'],$k,1);
}




}



for($k=0;$k <count($_SESSION['buynowThis']);$k++)
{
if(isset($_POST['delett'.$k]))
{
    
    
    array_splice($_SESSION['buynowThis'],$k,1);
}




}



for($k=0;$k <count($_SESSION['addThiscart']);$k++)
{



if(isset($_POST['edit'.$k]))


{
    foreach($_SESSION['addThiscart'] as $key => $value)
{
    if($key == $k)
    {
    
        $_SESSION['addThiscart'][$key][3]=$_POST['text'.$k];
    
    }
}

}


}



for($k=0;$k <count($_SESSION['buynowThis']);$k++)
{



if(isset($_POST['editt'.$k]))


{
    foreach($_SESSION['buynowThis'] as $key => $value)
{
    if($key == $k)
    {
    
        $_SESSION['buynowThis'][$key][3]=$_POST['text'.$k];
    
    }
}

}


}


if(isset($_POST['add2']))
{

    foreach($_SESSION['buynowThis'] as $key => $value)
    {
        array_push($_SESSION['addThiscart'],$_SESSION['buynowThis'][$key]);
    }
    unset($_SESSION['buynowThis']);
}






if(isset($_POST['add1']))
{

    foreach($_SESSION['addThiscart'] as $key => $value)
    {
        array_push($_SESSION['buynowThis'],$_SESSION['addThiscart'][$key]);
    }
    unset($_SESSION['addThiscart']);
}


if(isset($_POST['removeall1']))
{
    unset($_SESSION['addThiscart']);
}

if(isset($_POST['removeall2']))
{
    unset($_SESSION['buynowThis']);
}


if(isset($_POST['removeall3']))
{
    unset($_SESSION['wishlist']);
}

































?>