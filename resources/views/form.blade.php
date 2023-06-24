<div class='row'>
    @csrf
        <div class="col-6">
        <label for="">Book Name *</label>
        <input class="form-control" type="text" placeholder="Book Name" name="name" value="<?php echo isset($book) ? $book->name : '' ?>">
        @if($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
    </div>
    <div class="col-3">
        <label for="">ISBN *</label>
        <input class="form-control" type="text" placeholder="ISBN" name="isbn" name="name" value="<?php echo isset($book) ? $book->isbn : '' ?>">
        @if($errors->has('isbn'))
            <span class="text-danger">{{ $errors->first('isbn') }}</span>
        @endif
    </div>
    <div class="col-2">
        <label for="">Value *</label>
        <input class="form-control value" type="text" placeholder="$ 00.00" name="value" name="name" value="<?php echo isset($book) ? $book->value : '' ?>">
        @if($errors->has('value'))
            <span class="text-danger">{{ $errors->first('value') }}</span>
        @endif
    </div>
</div>

<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>  

<script>
    $('.value').mask('####.##', {reverse: true})
</script>