# txutilshtml

## Overview 
txutilshtml facilitates text processing through the use of an HTML interface where the input text is pasted into the main textarea. Then the reformatted output text is outputted in the bottom textbox. 
Currently it only supports a very basic form of the "LinesRgxJs" or "Lines RegExp JavaScript" language that reformats an input text according to predefined actions.

## LinesRgxJs
A very rudimentary of this regex-based text-formatting macro-language is wholly included in the "linesrgsjs()" function inside txutils.html. Currently, it only recognizes the following keywords: if, elif, else, then, lnmatch(regexp), continue(), and concat2prev().
An example code in this macro-language is as follows:
```
if lnmatch(^A:) then continue 
elif lnmatch(^B:) then continue 
else concat2prev
endif
```
The above code transforms the following input:
```
Line 1
A: line a1
line a2 line a3
line a4 line a5
B: line b1
line b2 line b3
line b4 line b5
```
into the following output:
```
Line 1
A: line a1 line a2 line a3 line a4 line a5
B: line b1 line b2 line b3 line b4 line b5
```
## UPCOMING IDEAS
1. Inclusion of commonly-used shell commands, such as:
    1. grep
    2. grep -v
    3. wc [-l|c|w]
    4. sort
    5. uniq
2. Markdown viewer?
3. other text-formatting related...?

## LICENSE
txutilshtml uses the MIT License which can be found by clicking [on this link](https://github.com/ianlow27/txutilshtml/blob/main/LICENSE.md)
