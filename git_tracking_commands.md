4).file trackin commands
1.git add

Command Name:
git add

Syntax:
git add <file-name>

Purpose:
Stages a specific file for the next commit.

Example:
git add git_industry_commands.md

Screenshot Proof:


2. git add .

Command Name:
git add .

Syntax:
git add .

Purpose:
Stages all changed files in the current directory for the next commit.

Example:
git add .

Screenshot :<img width="1366" height="768" alt="git add " src="https://github.com/user-attachments/assets/c7e16291-91aa-4601-ab81-68b931d9becb" />


3.git add -p

Command Name:
git add -p

Syntax:
git add -p

Purpose:
Interactively stages parts of a file (hunks) for commit.

Example:
git add -p git_industry_commands.md

Screenshot:<img width="1366" height="768" alt="git add -p git_industry_commands md" src="https://github.com/user-attachments/assets/7e637853-4813-4d5a-b81f-5ec509323b69" />


4. git restore

Command Name:
git restore

Syntax:
git restore <file-name>

Purpose:
Restores a file to its last committed state (unstages changes).

Example:
git restore login.html

Screenshot :![Uploading git restore.png…]()


5.git restore --staged

Command Name:
git restore --staged

Syntax:
git restore --staged <file-name>

Purpose:
Unstages a file that has been added with git add.

Example:
git restore --staged login.html

Screenshot :![Uploading git restore stagged.png…]()

6.git rm

Command Name:
git rm

Syntax:
git rm <file-name>

Purpose:
Removes a file from the working directory and stages its deletion.

Example:
git rm login.html

Screenshot:![Uploading git rm.png…]()


7.git mv

Command Name:
git mv

Syntax:
git mv <old-file-name> <new-file-name>

Purpose:
Renames or moves a file and stages the change.

Example:
git mv login.html login5.html

Screenshot :![Uploading git mv.png…]()


