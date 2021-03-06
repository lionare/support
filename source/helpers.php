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

function compiled_path ( )
{
	return base_path ( ) . '/storage/compiled';
}

function cache_path ( )
{
	return base_path ( ) . '/storage/cache';
}