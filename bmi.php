<?php
require_once 'header.php';
?>
<!-- Note that by  we are present inside body with div class container since we include header and footer -->
<div class="mt-5">
    <h3>BMI CALCULATOR</h3>
    <div class="bmiBody mt40 con-center">
        <div class="row mt-3">
            <div class="col-7">
                <label><b>Enter Height</b></label>
                <div class="displayFlex">
                    <input type="text" class="form-control" placeholder="Enter your height" id="height">
                    <select id="heightType" class="form-control w-50px">
                        <option value="M">M</option>
                        <option value="CM" selected>CM</option>
                        <option value="FEET">FEET</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-7">
                <label><b>Enter Weight</b></label>
                <div class="displayFlex">
                    <input type="text" class="form-control" placeholder="Enter your weight" id="weight">
                    <select id="weightType" class="form-control w-50px">
                        <option value="KG" selected>KG</option>
                        <option value="G">G</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <h5 class="text-danger mt-3" id="errorMessage"></h5>
            <h5 class="usrMessage mt-3 text-success mb-1" id="usrMessage"></h5>
            <div class="col-2">
                <button class="btn btn-primary" onclick="calculteBmi()">Calculate</button>
            </div>
        </div>
    </div>
</div>

<script>
    function calculteBmi() {
        let weight = document.getElementById('weight').value.trim();
        let weightType = document.getElementById('weightType').value;

        let height = document.getElementById('height').value.trim();
        let heightType = document.getElementById('heightType').value;
        // console.log(weight, 'weight', weightType, 'weightType', height, 'height', heightType, 'heightType');
        if (height.length == 0 || parseInt(height) < 0) {
            document.getElementById('errorMessage').innerHTML = "Enter valid height";
            setBgRed('height', true);
            return;
        } else {
            document.getElementById('errorMessage').innerHTML = "";
            setBgRed('height', false);
        } 
        if (weight.length == 0 || parseInt(weight) < 0) {
            document.getElementById('errorMessage').innerHTML = "Enter valid weight";
            setBgRed('weight', true);
            return;
        } else {
            document.getElementById('errorMessage').innerHTML = "";
            setBgRed('weight', false);
        }

        

        let bmi = 0;

        if (heightType == 'CM' && weightType == 'KG') {
            bmi = (weight / (height * height)) * 10000;
        } else if (heightType == 'FEET' && weightType == 'KG') {
            //since 1 feet is equal to 30.48 cm
            height = height * 30.48;
            bmi = (weight / (height * height)) * 10000;
            console.log(height, 'height', weight, 'weight');
        } else if (heightType == 'M' && weightType == 'KG') {
            bmi = (weight * height * height);
        } else if (heightType == 'CM' && weightType == 'G') {
            bmi = ((weight * 1000) / (height * height)) * 10000;
        } else if (heightType == 'M' && weightType == 'G') {
            bmi = ((weight * 1000) / (height * height));
        } else if (heightType == 'FEET' && weightType == 'KG') {
            //since 1 feet is equal to 30.48 cm
            height = height * 30.48;
            bmi = (weight / (height * height));
        }
        console.log(bmi);

        if (bmi > 18.5 && bmi <= 24.9) {
            document.getElementById('usrMessage').innerHTML = "YOU HAVE NORMAL WEIGHT";
        }else if(bmi <=18.5){
            document.getElementById('usrMessage').innerHTML = "YOU HAVE UNDER WEIGHT";
        }
         else {
            document.getElementById('usrMessage').innerHTML = "YOU ARE OVER WEIGHT";
        }

    }
</script>

<?php
require_once 'footer.php';
?>