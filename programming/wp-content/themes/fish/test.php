<div class="container">
    <div class="row">
        <div class="col-10 col-lg-12">
            <p class="text-center text-uppercase contact-form__heading">Contact Us</p>
        </div>
        <div class="col-2 d-lg-none">
            <button type="button" class="close contact-form__close" data-dismiss="modal"
                    aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mb-3">
            <label for="firstName">First name</label>
            [text* your-name class:form-control]
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mb-3">
            <label for="firstName">Email</label>
            [email* your-email class:form-control]
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mb-3">
            <label for="PhoneNumber">Phone number</label>
            [tel* phone class:form-control]
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mb-3">
            <label for="message">Text message</label>
            [textarea your-message class:form-control rows:3]
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            [submit "Send" class:"btn contact-form__send btn-primary btn-lg btn-block"]
        </div>
    </div>

</div>


<label> First name (required)
    [text* your-name] </label>
[text text-122 class:fdhahah]
<label> Email (required)
    [email* your-email] </label>

<label> Phone number
    [tel* phone] </label>

<label> Text message
    [textarea your-message] </label>

[submit "Send"]