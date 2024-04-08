<?php
$check = mail("developervijay11@gmail.com", "Testing Email", "This is a testing email form xamp server", "From: vijaywithccet@gmail.com");
if($check)
{
echo "email sent successfully";
}
else
{
echo "email not sentsuccessfully";
}
?>