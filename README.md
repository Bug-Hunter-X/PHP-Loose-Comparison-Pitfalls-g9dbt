# PHP Loose Comparison Pitfalls

This repository demonstrates a common, yet subtle, error in PHP programming stemming from the language's loose type system.  The example highlights how using the loose comparison operator (`==`) can produce unexpected results when comparing variables of different types.

The `bug.php` file shows the erroneous code and its unexpected outputs. The `bugSolution.php` file provides a corrected version using strict comparison to avoid this issue.

This repository serves as a reminder to be cautious about type juggling in PHP and to leverage the strict comparison operator (`===`) whenever strict type checking is necessary.