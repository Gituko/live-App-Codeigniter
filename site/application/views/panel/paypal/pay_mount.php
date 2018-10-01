<style>
    body{background-color:#eee;}
    form{padding:25px;background-color:#fff;width:25%;border-radius:10px;color:#fff;}
    tr{width:250%;}
    label{color:#363636;font-family:'Arial';font-variant:small-caps;}
    input{height:35px;width:100%;background:#eee;border:0 !important;padding:5px;font-weight:bold; color:#363636;border-radius:5px;margin:5px;}
    input:focus{background-color:#fff;box-shadow:0px 0px 2px #0060ff;}
    input[type="submit"]{background-color:#0060ff;color:#fff;}
    input[type="submit"]:hover{background-color:#fff;color:#363636;box-shadow:0px 0px 2px #0060ff;}
    input[type="hidden"]{color:#fff;}
    hr{width:25%;border:1px solid #ddd;}
    #royalrandhawa{
        text-align:left;
        font-family:'Verdana';
        width:340px;
        background-color:#0060ff;
        color:#fff;
        border-radius:5px 30px;
        padding:10px;
    }
</style>
<body><center>
    <form name="paypalForm" action="../paypal/index" method="post">
        <input type="hidden" name="uno" value="uno" />       
        <input type="hidden" name="id" value="1" />

        <table><tr>
                <td class="left"><label>Any Notice</label></td><td class="right"><input type="text" name="description" value="Pay to Mr. ROYALRandhawa" /><br /></td></tr>
            <tr><td class="left"><label>Any Amount</label></td><td class="right"><input type="text" name="payment" value="10" /></td>

            </tr></table>                           

        <input type="submit" name="paypal"  value="Payment via Paypal" />

        <img src="images/secure-paypal-logo.jpg" />

    </form>
    <hr /><br />

</center></body>
