<section id="table">

   <div class="biopsy-test-cost">
      <table class="biopsy-test-cost__table biopsy-test-cost__table-large-devices" cellspacing="0" cellpadding="">

         <tr>
            <th>Biopsy Type</th>
            <th>Biopsy Cost*</th>
         </tr>
         <tr>
            <td class="biopsy-test-cost__table__td1">Biopsy Histopathology</td>
            <td class="biopsy-test-cost__table__td">Rs.999/-</td>
         </tr>
         <tr>
            <td class="biopsy-test-cost__table__td1">Biopsy Procedure</td>
            <td class="biopsy-test-cost__table__td">Rs.1,999/-</td>
         </tr>
         <tr>
            <td class="biopsy-test-cost__table__td1">Biopsy with Gun (If needed)</td>
            <td class="biopsy-test-cost__table__td">Rs.2,999/-</td>
         </tr>

         <tr>
            <td class="biopsy-test-cost__table__td1">CT Guided Biopsy</td>
            <td class="biopsy-test-cost__table__td">Rs.9,999/-</td>
         </tr>
         <tr>
            <td class="biopsy-test-cost__table__td1">Ultrasound Guided Biopsy - Minor</td>
            <td class="biopsy-test-cost__table__td">Rs.2,999/-</td>
         </tr>
         <tr>
            <td class="biopsy-test-cost__table__td1">Ultrasound Guided Biopsy - Major</td>
            <td class="biopsy-test-cost__table__td">Rs.5,999/-</td>
         </tr>
         <tr>
            <td class="biopsy-test-cost__table__td1">Surgical Biopsy</td>
            <td class="biopsy-test-cost__table__td"><span>Rs.9,999/-</span> <b>*These are all Base Prices</b></td>
         </tr>

      </table>
      <table class="biopsy-test-cost__table biopsy-test-cost__table-small-devices" cellspacing="0" cellpadding="">

         <tr>
            <th>Biopsy Type</th>
            <th>Biopsy Cost*</th>
         </tr>
         <tr>
            <td class="biopsy-test-cost__table__td1">Histopathology</td>
            <td class="biopsy-test-cost__table__td">Rs.999/-</td>
         </tr>
         <tr>
            <td class="biopsy-test-cost__table__td1">Biopsy Procedure</td>
            <td class="biopsy-test-cost__table__td">Rs.1,999/-</td>
         </tr>
         <tr>
            <td class="biopsy-test-cost__table__td1">US Guided Biopsy</td>
            <td class="biopsy-test-cost__table__td">Rs.2,999/-</td>
         </tr>

         <tr>
            <td class="biopsy-test-cost__table__td1">Biopsy Gun</td>
            <td class="biopsy-test-cost__table__td">Rs.2,999/-</td>
         </tr>

         <tr>
            <td class="biopsy-test-cost__table__td1">CT Guided Biopsy</td>
            <td class="biopsy-test-cost__table__td">Rs.9,999/-</td>
         </tr>

         <tr>
            <td class="biopsy-test-cost__table__td1">Surgical Biopsy</td>
            <td class="biopsy-test-cost__table__td"><span>Rs.9,999/-</span><b>*These are all Base Prices</b></td>
         </tr>

      </table>

      <div class="biopsy-test-cost__text">
         <h1> <b>Lung Biopsy Test <br>Cost </b> in Hyderabad</h1>
         <p>Reduce the risk of repeat biopsy and wrong diagnosis by getting the biopsy done by an expert surgical oncologist rather than a generic diagnostic surgeon. </p>
         <p class="biopsy-test-cost__text__p2">Get<span> Free In-person Cancer Doctor Consultation </span>to discuss the biopsy that suits your needs.</p>
         <p> Your<span> Cost Estimate is just a click away.</span> </p>

         <button onclick="myFunction()" style="color:white">Get FREE Cost Estimation</button>
      </div>
   </div>
</section>

<dialog id="myDialog">
   <img class="myDialog__img" onclick="dialog()" src="assets/Md_Cancel.webp" alt="cancel-icon">

   <div class="myDialog__main-container">
      <div class="myDialog__main-container-h1">
         <h1>Get Free Cost Estimation in 10 Minutes</h1>
      </div>
      <div class="myDialog__main-container-sm-h1">
         <h1>Please Fill the Form</h1>
      </div>

      <div class="myDialog__form">
         <h1 class="myDialog__main-container-md-h1">Please Fill the Form To Get Free Cost Estimation</h1>

         <form method="POST" action="components/formRedirectPage.php">
            <input type="hidden" name="utm_source" id="utm_source" value="<?php echo $utm_source; ?>">
            <input type="hidden" name="utm_campaign" id="utm_campaign" value="<?php echo $utm_campaign; ?>">
            <input type="hidden" name="utm_medium" id="utm_medium" value="<?php echo $utm_medium; ?>">
            <input type="hidden" name="form_source" id="form_source" value="Biopsy Landing Page">
            <input class="myDialog__main-container-name" pattern="[A-Za-z ]{3,}" minlength="3" maxlength="25" title="Please enter at least 3 alphabetic characters" type="text" placeholder="Name" name="name" />
            <input class="myDialog__main-container-phone" type="tel" required minlength="10" maxlength="14" title="Minimum 10 Numbers Required" placeholder="Phone number" name="phone" />
            <button type="submit">Submit</button>
         </form>
         <div class="myDialog__fill-form">
            <div>
               <p class="myDialog__p">Step-1</p>
               <p class="myDialog__p1">Share your Reports</p>
            </div>
            <div>
               <p class="myDialog__p">Step-2</p>
               <p class="myDialog__p1">Doctor will Review the reports</p>
            </div>
            <div>
               <p class="myDialog__p">Step-3</p>
               <p class="myDialog__p1">Get Free Cost Estimation</p>
            </div>
         </div>
      </div>
   </div>
</dialog>
<script>
   function myFunction() {
      document.getElementById("myDialog").showModal();
      window.onclick = function(event) {
         var dialog = document.getElementById("myDialog");
         if (event.target == dialog) {
            dialog.close();
         }
      }
   }

   function dialog() {
      var dialog = document.getElementById("myDialog");
      dialog.close()
   }
</script>