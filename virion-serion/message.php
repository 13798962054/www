<?php
include "footer-header/header.php"
?>

<div id="message">
    <div class="message-title">在线留言</div>
    <div class="message-form">
        <table>
            <tbody>
                <tr>
                    <th width="150" align="right">留言主题：</th>
                    <td><input type="text" id="zt" class="contact_inp" name="zt"></td>
                </tr>
                <tr>
                    <th align="right">留言内容：</th>
                    <td><textarea name="nr" id="nr"></textarea></td>
                </tr>
                <tr>
                    <th align="right">客户名称：</th>
                    <td><input type="text" class="contact_inp" id="mc" name="mc"></td>
                </tr>
                <tr>
                    <th align="right">　联系人：</th>
                    <td><input type="text" class="contact_inp" id="name" name="name"></td>
                </tr>
                <tr>
                    <th align="right">联系电话：</th>
                    <td><input type="text" class="contact_inp" id="tel" name="tel">
                        <font style="color:red;" id="error_msg1"></font></td>
                </tr>
                <tr>
                    <th align="right">QQ/MSN：</th>
                    <td><input type="text" class="contact_inp" id="qq" name="qq"></td>
                </tr>
                <tr>
                    <th align="right">&nbsp;</th>
                    <td><input type="submit" class="contact_sub" value="提交" name="submit"></td>
                </tr>

            </tbody>

        </table>
    </div>
</div>


<?php
include "footer-header/footer.php"
?>
