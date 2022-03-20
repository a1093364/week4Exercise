<html>
<title>墾丁三日遊</title>
    <body bgcolor='#be77f'>
        <font color="red" size="7" face="標楷體"><center><b><u>墾丁三日遊表單</b></u></center></font></br>
        <font color="blue" size="5" face="標楷體"><b>行程內容</b></font></br>
        親子路線： 艾米達精靈谷茶樹莊園 →國立海洋生物博物館→墾丁大街夜市</br>
        情侶約會路線：星砂灣→後壁湖浮潛→熊家萬巒豬腳→四重溪溫泉公園</br>
        人文風情路線：恆春古城 (恆春民謠館、阿嘉的家、城門)→高山巖福德宮→關山日落.</br>
        山海風情路線：龍磐公園→水蛙窟大草原→肥春號→龍鑾潭自然中心→小巴里島岩. </br></br>

        <form action="rinfo.php" method="post" enctype="multipart/form-data">
                Name:<input type="text" name="uName" placeholder="name" required> </br>
                Email:<input type="email" name="uMail" placeholder="email" required> </br>
                Tel:<input type="text" name="uTel" placeholder="tel" required> </br>
                性別</br>
                <input name="gender" type="radio" value="1">男
                <input name="gender" type="radio" value="2">女
                <input name="gender" type="radio" value="3"> 其他</br>

                食物偏好</br>
                <input name="food[]" type="checkbox" value="葷">葷
                <input name="food[]" type="checkbox" value="素">素
                <input name="food[]" type="checkbox" value="其他"> 其他</br>
                
                T-shirt尺寸
                <select name="Tsize">
                <option>S</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
                </select>
                </br>
                T-shirt顏色:<input type="color" name="tColor" placeholder="color" required> </br>
                生日:<input type="date" name="uBirthday" placeholder="birthday" required> </br>
                訂票數:<input type="number" name="ticketNum"  required> </br>
                評論:<textarea cols='30' rows='30' name="comment"></textarea></br>
                上傳檔案:<input type="file" name="uPhoto"  required> </br>
                <input type="submit">
        </form>
        
        <font color="green" size="5" face="標楷體"><b>T-shirt尺寸對照表</b></font></br>
        <table border="1">
        <tr><th></th><th>S</th><th>M</th><th>L</th><th>XL</th></tr>
        <tr><th>長</th><td>10cm</td><td>20cm</td><td>30cm</td><td>40cm</td></tr>
        <tr><th>寬</th><td>50cm</td><td>60cm</td><td>70cm</td><td>80cm</td></tr>
        <tr><th>高</th><td>90cm</td><td>100cm</td><td>110cm</td><td>120cm</td></tr>
        </table>
        <img src="/formExercise.jpg" width="50%" border="3px"></img>
        
    </body>
</html>