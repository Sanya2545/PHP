<?php
function create_input($name, $label, $type)
{
    print <<< END
    <div class="form-group">
                            <label for="email">$label</label>
                            <input type="$type"
                            class="form-control"
                            id="$name"
                            name="$name"
                            value=""/>
                        </div>
END;

}
?>