@echo off   
set a=18
setlocal EnableDelayedExpansion   
for %%n in (*.jpg) do ( 
	set /A a+=1   
	ren "%%n" "product!a!.jpg"   
)  