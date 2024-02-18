<form action="change_password.php" method="post">
    <div class="form-group">
        <label>New Password</label>
        <input type="password" name="new_password"
            class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>"
            value="<?php echo $new_password; ?>">
        <span class="invalid-feedback">
            <?php echo $new_password_err; ?>
        </span>
    </div>
    <div class="form-group">
        <label>Confirm New Password</label>
        <input type="password" name="confirm_new_password"
            class="form-control <?php echo (!empty($confirm_new_password_err)) ? 'is-invalid' : ''; ?>">
        <span class="invalid-feedback">
            <?php echo $confirm_new_password_err; ?>
        </span>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-link" href="login.php">Cancel</a>
    </div>
</form>