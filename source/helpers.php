<?php

function base_path ( )
{
	return realpath ( __DIR__ . '/../../../../' );
}

function configuration_path ( )
{
	return base_path ( ) . '/configuration';
}

function resource_path ( )
{
	return base_path ( ) . '/resources';
}