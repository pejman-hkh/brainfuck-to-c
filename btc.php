<?php
$h = '++++++++[>++++[>++>+++>+++>+<<<<-]>+>+>->>+[<]<-]>>.>---.+++++++..+++.>>.<-.<.+++.------.--------.>>+.>++.';
$h = str_replace(['+', '-', '[', ']', '>', '<', '.'], ['++*ptr;'."\n",  '--*ptr;'."\n", "while (*ptr) {\n", "}\n", '++ptr;'."\n", '--ptr;'."\n", 'putchar(*ptr);'."\n"], $h );

$a = '#include <stdio.h>
int main() {

	char arr[30000] = {0};

	char *ptr = &arr;
	
	'.$h.'
}
';

file_put_contents('test.c', $a);