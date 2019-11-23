<?php
function create_input($name, $label)
{
    print <<< END
    <div class="form-group">
                            <label for="email">$label</label>
                            <input type="text"
                            class="form-control"
                            id="$name"
                            name="$name"
                            value=""/>
                        </div>
END;

}
?>