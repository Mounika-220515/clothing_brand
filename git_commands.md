5).git commit commands

1. git commit
Command Name:
git commit

Syntax:
git commit

Purpose:
The git commit command is used to save the staged changes into the Git repository.
When this command is executed without options, Git opens the default text editor so you can write a commit message describing the changes.

Example:
git add index.html
git commit

Screenshot:<img width="1366" height="768" alt="git commit (2)" src="https://github.com/user-attachments/assets/a99e80e6-36cc-43b1-9363-9efa246cac18" />

2. git commit -m

Command Name:
git commit -m

Syntax:
git commit -m "commit message"

Purpose:
This command allows you to add a commit message directly in the command line, without opening an editor.

Example:
git add index.html
git commit -m "Added file1.txt to repository"

Screenshot:<img width="1366" height="768" alt="git commit -m" src="https://github.com/user-attachments/assets/347401ff-4af3-44e3-91b4-ae544f0a8527" />



3. git commit --amend

Command Name:
git commit --amend

Syntax:
git commit --amend

Purpose:
This command is used to modify the most recent commit.
You can Change the commit message
Add new changes to the previous commit.

Example:
git add file2.txt
git commit --amend

Screenshot :<img width="1366" height="768" alt="git commit --amend" src="https://github.com/user-attachments/assets/b0e2b6e2-93dd-497a-82d4-fcb31c90a743" />


4. git commit --no-edit

Command Name:
git commit --no-edit

Syntax:
git commit --amend --no-edit
Purpose:
This command amends the previous commit without changing the commit message.
It keeps the old commit message and only updates the commit with new changes.

Example:
git add file2.txt
git commit --amend --no-edit

Screenshot:<img width="1366" height="768" alt="git coomit no edit" src="https://github.com/user-attachments/assets/97715967-9e2e-47f0-9956-977c47926b75" />


6. Branch Management Commands

1. git branch

Command Name:
git branch

Syntax:
git branch

Purpose:
The git branch command is used to list all local branches in the repository.
The current active branch will be marked with an asterisk (*).

Example:
git branch

Screenshot:<img width="1366" height="768" alt="git branch" src="https://github.com/user-attachments/assets/62d5bcfe-fceb-4478-8e42-ef5e42342193" />


2. git branch -a

Command Name:
git branch -a

Syntax:
git branch -a

Purpose:
This command is used to display all branches, including:
Local branches
Remote branches

Example:
git branch -a

Screenshot:<img width="1366" height="768" alt="git branch -a" src="https://github.com/user-attachments/assets/0e1f11ea-206c-43cf-be76-92aa56101e1f" />

3. git branch -d

Command Name:
git branch -d

Syntax:
git branch -d <branch-name>

Purpose:
This command is used to delete a branch safely.
Git will only delete the branch if it has already been merged.

Example:
git branch -d main

Screenshot:

4. git branch -D

Command Name:
git branch -D

Syntax
git branch -D <branch-name>

Purpose:
This command force deletes a branch, even if it has not been merged.

Example:
git branch -D test


5. git checkout

Command Name:
git checkout

Syntax:
git checkout <branch-name>

Purpose:
The git checkout command is used to switch from the current branch to another existing branch.

Example:
git checkout main

Screenshot:<img width="1366" height="768" alt="git checkout" src="https://github.com/user-attachments/assets/2665f9ce-156a-4576-82dd-58447dc19051" />

6. git checkout -b

Command Name:
git checkout -b

Syntax:
git checkout -b <new-branch-name>

Purpose:
This command is used to create a new branch and immediately switch to it.

Example:
git checkout -b newfeature

Screenshot :<img width="1366" height="768" alt="git checkout -b" src="https://github.com/user-attachments/assets/34167d19-e0cf-4e81-a5f9-e3dd38e223df" />


7. git switch

Command Name:
git switch

Syntax:
git switch <branch-name>

Purpose:
The git switch command is a modern alternative to git checkout used specifically for switching branches.

Example:
git switch main

Screenshot :<img width="1366" height="768" alt="git switch" src="https://github.com/user-attachments/assets/72a81096-f827-4bcb-ac69-37070903fade" />


8. git switch -c

Command Name:
git switch -c

Syntax:
git switch -c <new-branch-name>

Purpose:
This command creates a new branch and switches to it, similar to git checkout -b.

Example:
git switch -c dev

Screenshot :<img width="1366" height="768" alt="git switch -c" src="https://github.com/user-attachments/assets/dc0d1849-74c0-48ee-8a8c-cc80d0002a35" />

