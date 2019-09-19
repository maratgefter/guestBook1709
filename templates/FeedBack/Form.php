<div class="d-flex justify-content-center">
    <h1 class="m-2">FeedBack</h1>
</div>
<div class="container-fluid">
<div class="d-flex justify-content-center">
<form action="<?= $formPath ?>" method="post" class="w-50">
    <input class="m-2 w-100" type="text" name="nick" placeholder="Enter your name">
    <textarea class="m-2 w-100" name="message" cols="30" rows="10">Enter your message</textarea>

    <select class="m-2 w-100" name="mark">
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
        <option value='4'>4</option>
        <option value='5'>5</option>
    </select>
    <div class="d-flex justify-content-center">
        <input type="submit" value="send" class="m-2 w-100">
    </div>
</form>
</div>
</div>
<div class='login font-weight-bold text-white-50 bg-success fixed-bottom text-right'>
    <a href='/login'>Login</a>
</div>