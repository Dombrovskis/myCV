<?php 

require_once 'components/header.php';

?>
        <main>
            <div class="container">
                <div class="header">Calculator</div>
                <input type="text" class="result">
                <table>
                    <tr>
                        <td><input type="button" value="&radic;" class="global first-row"></td>
                        <td><input type="button" value="(" class="global first-row"></td>
                        <td><input type="button" value=")" class="global first-row"></td>
                        <td><input type="button" value="%" class="global first-row"></td>
                    </tr>
                    <tr>
                        <td><input type="button" value="7" class="global"></td>
                        <td><input type="button" value="8" class="global"></td>
                        <td><input type="button" value="9" class="global"></td>
                        <td><input type="button" value="/" class="global"></td>
                    </tr>
                    <tr>
                        <td><input type="button" value="4" class="global"></td>
                        <td><input type="button" value="5" class="global"></td>
                        <td><input type="button" value="6" class="global"></td>
                        <td><input type="button" value="X" class="global"></td>
                    </tr>
                    <tr>
                        <td><input type="button" value="1" class="global"></td>
                        <td><input type="button" value="2" class="global"></td>
                        <td><input type="button" value="3" class="global"></td>
                        <td><input type="button" value="-" class="global"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="button" value="0" class="global grey"></td>
                        <td><input type="button" value="." class="global"></td>
                        <td rowspan="2"><input type="button" value="+" class="global plus"></td>
                    </tr>
                    <tr>
                        <td><input type="button" value="Del" class="global red white-text"></td>
                        <td colspan="2"><input type="button" value="=" class="global green white-text"></td>
                    </tr>
                </table>
            </div>
        </main>
    </div>
</body>

</html>