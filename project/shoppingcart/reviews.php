
<?=template_header('Reviews')?>
<link rel="stylesheet" href="style.css">
<script type="text/javascript">
  function showMessage() {
                alert("Review Submitted Sucessfully!");
            }
</script>
<style>
    #feedback {
  max-width: 60%;
  width: 100%;
  margin: 10px auto;
  padding: 20px;
  border: solid 2px #123C69;
  background: #AC3B61;
  box-shadow: #e6e6e6 0 0 4px ;
  border-radius: 0.25rem;
}

@media (max-width: 720px) {
  #feedback{
    max-width: 90%;
  }
}

@media (max-width: 500px) {
  #feedback{
    padding: 10px;
  }
}

#fh2{
 padding: 2px 15px;
 color: #ff4d4d;
 text-align: center;
 
 
}

@media (max-width: 400px) {
  #fh2{
    font-size: 20px;
  }
}


#fh6 {
 padding: 2px 15px;
 color: #4d0er;
 text-align: center;
 font-weight: normal;
}

@media (max-width: 400px) {
  #fh6{
    font-size: 12px;
  }
}

.pinfo {
 margin: 8px auto;
 font-weight: bold;
 line-height: 1.5;
 color: white;
 
}
.form-group {
  margin-bottom: 1rem;
  background-color:#123C69;
}
  
.form-control {
  display: block;
  width: 100%;
  padding: 0.5rem 0.75rem;
  font-size: 1rem;
  line-height: 1.25;
  font-weight: bold;
  color: #AC3B61;
  background-color: #EEE2DC;
  background-image: none;
  -webkit-background-clip: padding-box;
          background-clip: padding-box;
  border: 2px solid #123C69;
  border-radius: 0.25rem;
  -webkit-transition: border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
  -o-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
}

.form-control::-ms-expand {
  background-color: transparent;
  border: 0;
}

.form-control:focus {
  color: #696060;
  background-color: #fff;
  border-color: #5cb3fd;
  outline: none;
}

.form-control::-webkit-input-placeholder {
  color: #F34949;
  opacity: 1;
  
}

.form-control::-moz-placeholder {
  color: brown;
  opacity: 1;
}

.form-control:-ms-input-placeholder {
  color: blue;
  opacity: 1;
}

.form-control::placeholder {
  color: white;
  opacity: 1;
}

.form-control:disabled, .form-control[readonly] {
  background-color: red;
  opacity: 1;
}

.form-control:disabled {
  cursor: not-allowed;
}

select.form-control:not([size]):not([multiple]) {
  height: calc(2.25rem + 2px);
}

select.form-control:focus::-ms-value {
  color: green;
  background-color: #fff;
}

.form-control-file,
.form-control-range {
  display: block;
}

.input-group {
  position: relative;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  width: 100%;
}

.input-group .form-control {
  position: relative;
  z-index: 2;
  -webkit-box-flex: 1;
  -webkit-flex: 1 1 auto;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  width: 1%;
  margin-bottom: 0;
}

.input-group .form-control:focus, .input-group .form-control:active, .input-group .form-control:hover {
  z-index: 3;
}

.input-group-addon,
.input-group-btn,
.input-group .form-control {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.input-group-addon:not(:first-child):not(:last-child),
.input-group-btn:not(:first-child):not(:last-child),
.input-group .form-control:not(:first-child):not(:last-child) {
  border-radius: 0;
}

.input-group-addon,
.input-group-btn {
  white-space: nowrap;
  vertical-align: middle;
}

.input-group-addon {
  width: 45px;
  padding: 0.5rem 0.75rem;
  margin-bottom: 0;
  font-size: 1rem;
  font-weight: normal;
  line-height: 1.25;
  color: #2e2e2e;
  text-align: center;
  background-color: #eceeef;
  border: 2px solid #123C69;
  border-radius: 0.25rem;
}

.input-group-addon.form-control-sm,
.input-group-sm > .input-group-addon,
.input-group-sm > .input-group-btn > .input-group-addon.btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  border-radius: 0.2rem;
}

.input-group-addon.form-control-lg,
.input-group-lg > .input-group-addon,
.input-group-lg > .input-group-btn > .input-group-addon.btn {
  padding: 0.75rem 1.5rem;
  font-size: 1.25rem;
  border-radius: 0.3rem;
}

.input-group-addon input[type="radio"],
.input-group-addon input[type="checkbox"] {
  margin-top: 0;
}

.input-group .form-control:not(:last-child),
.input-group-addon:not(:last-child),
.input-group-btn:not(:last-child) > .btn,
.input-group-btn:not(:last-child) > .btn-group > .btn,
.input-group-btn:not(:last-child) > .dropdown-toggle,
.input-group-btn:not(:first-child) > .btn:not(:last-child):not(.dropdown-toggle),
.input-group-btn:not(:first-child) > .btn-group:not(:last-child) > .btn {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}

.input-group-addon:not(:last-child) {
  border-right: 0;
}

.input-group .form-control:not(:first-child),
.input-group-addon:not(:first-child),
.input-group-btn:not(:first-child) > .btn,
.input-group-btn:not(:first-child) > .btn-group > .btn,
.input-group-btn:not(:first-child) > .dropdown-toggle,
.input-group-btn:not(:last-child) > .btn:not(:first-child),
.input-group-btn:not(:last-child) > .btn-group:not(:first-child) > .btn {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}

.form-control + .input-group-addon:not(:first-child) {
  border-left: 0;
  
}

.btn {
  display: inline-block;
  font-weight: normal;
  line-height: 1.25;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  border: 1px solid transparent;
  padding: 0.5rem 1rem;
  font-size: 1rem;
  border-radius: 0.25rem;
  -webkit-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}

.btn:focus, .btn:hover {
  text-decoration: none;
}

.btn:focus, .btn.focus {
  outline: 0;
  -webkit-box-shadow: 0 0 0 2px rgba(2, 117, 216, 0.25);
          box-shadow: 0 0 0 2px rgba(2, 117, 216, 0.25);
}

.btn.disabled, .btn:disabled {
  cursor: not-allowed;
  opacity: .65;
}

.btn:active, .btn.active {
  background-image: none;
}

a.btn.disabled,
fieldset[disabled] a.btn {
  pointer-events: none;
}

.btn-primary {
  color: #fff;
  background-color: #0275d8;
  border-color: #0275d8;
}

.btn-primary:hover {
  color: #fff;
  background-color: #025aa5;
  border-color: #01549b;
}

.btn-primary:focus, .btn-primary.focus {
  -webkit-box-shadow: 0 0 0 2px rgba(2, 117, 216, 0.5);
          box-shadow: 0 0 0 2px rgba(2, 117, 216, 0.5);
}

.btn-primary.disabled, .btn-primary:disabled {
  background-color: #0275d8;
  border-color: #0275d8;
}

.btn-primary:active, .btn-primary.active,
.show > .btn-primary.dropdown-toggle {
  color: #fff;
  background-color: #025aa5;
  background-image: none;
  border-color: #01549b;
}

</style>

<script src="https://use.fontawesome.com/a6f0361695.js"></script>


<h6 id="fh6" style="color:#123C69">Your review will help us to improve our web hosting quality products, and customer services.</h6>


<form id="feedback" action="index.php">
  <div class="pinfo">Your personal info</div>
  
<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group" >
  <span class="input-group-addon"><i class="fa fa-user"></i></span>
  <input name="name" required placeholder="John Doe" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
    <input name="email" required type="email" class="form-control" placeholder="john.doe@yahoo.com">
     </div>
  </div>
</div>

<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-globe"></i></span>
  <input  name="URL" placeholder="https://google.com" class="form-control"  type="url">
    </div>
  </div>
</div>

 <div class="pinfo">Rate our overall product</div>
  

<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-heart"></i></span>
   <select class="form-control" id="rate">
      <option value="1star">1</option>
      <option value="2stars">2</option>
      <option value="3stars">3</option>
      <option value="4stars">4</option>
      <option value="5stars">5</option>
    </select>
    </div>
  </div>
</div>

 <div class="pinfo">Write your feedback.</div>
  

<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
  <textarea required class="form-control" id="review" rows="3"></textarea>
 
    </div>
  </div>
</div>

 <button type="submit" onClick="showMessage()" class="btn btn-primary" id="submitBtn">Submit</button>
</form>

<?=template_footer()?>
