
<?php
public function manageUsers(User $user)
{
return $user->hasRole('admin');
}
