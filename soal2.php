<!DOCTYPE html>
<html>

<head>
    <title>Example Form</title>
</head>

<body onload="FirstLoad()">
    <br>
    <form>

        <div id='form_input'>
            <label id="lb_value">Nama anda:</label>
            <input type="text" id="txtnilai" name="txtnilai" required>
        </div>

        <div id="show_data">
            <label id="lb_nama"> </label><br>
            <label id="lb_umur"> </label><br>
            <label id="lb_hobi"> </label>
        </div>

        <br><br>
        <a id="btn_submit" type="button" value="Submit" onclick="submit(1);"
            style="background-color:grey;color:black; "> Submit</a>
    </form>
</body>

<script>
    var seq = 0;
    var no = 0;
    var vnama = '';
    var vumur = '';
    var vhobi = '';

    function submit(nomor) {
        seq = nomor + seq;
        let labelElement = document.getElementById("lb_value");
        nilai = document.getElementById("txtnilai").value;

        if (seq == 1) {
            vnama = nilai;
            labelElement.innerHTML = "Umur Anda";
        } else if (seq == 2) {
            labelElement.innerHTML = "Hobi Anda";
            vumur = nilai;
        } else if (seq == 3) {
            vhobi = nilai;
            //   alert(vnama);
            show_data();
        }

        document.getElementById('txtnilai').value = "";
    }

    function FirstLoad() {
        document.getElementById('show_data').style.visibility = "hidden";
        document.getElementById('form_input').style.visibility = "visible";
    }

    function show_data() {
        document.getElementById('show_data').style.visibility = "visible";
        document.getElementById('form_input').style.visibility = "hidden";
        document.getElementById('btn_submit').style.visibility = "hidden";

        let labelnama = document.getElementById("lb_nama");
        labelnama.innerHTML = "Nama : " + vnama;

        let labelumur = document.getElementById("lb_umur");
        labelumur.innerHTML = "Umur : " + vumur;

        let labelhobi = document.getElementById("lb_hobi");
        labelhobi.innerHTML = "Hobi : " + vhobi;
    }
</script>

</html>