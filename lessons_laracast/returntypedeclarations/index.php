<?php

class User {}

function getUser() : User {
	return new User;
}

var_dump(getUser());