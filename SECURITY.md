# Security Policy

## Automated Vulnerability Scanning
We use [GitHub's Dependabot](https://dependabot.com/) to automatically scan for vulnerabilities in our dependencies. If a vulnerability is found, Dependabot will create a pull request to update the affected dependency to a secure version. We review and merge these pull requests as quickly as possible to ensure our project remains secure.

Additionally, we use [Dependency Track](https://dependencytrack.org/) to pro-actively monitor our dependencies for known vulnerabilities and to manage our software supply chain risk.

That said, we encourage users to also use tools like [Sensiolabs Security Checker](https://security.symfony.com/) or [Roave Security Advisories](https://github.com/Roave/SecurityAdvisories) to further enhance their security posture.

Furthermore, it's worth mentioning that this is open source software, and we rely on the community to help identify, report and fix any security issues. If you discover a vulnerability, please report it to us immediately so we can address it. By relying on third party tools such as Vitepress for documentation, we are not inherting possible security vulnerabilities form them, as we do not package these tools with our software. However, we scan the whole codebase, so security reports might flag 3rd party code as well.

## Supported Versions
Only the latest major version receives security updates.

| Version | Supported          |
| ------- | ------------------ |
| 0.2.x   | :white_check_mark: |
| < 0.2   | :x:                |

## Reporting a Vulnerability
**Please do not open a public issue for security vulnerabilities.**

Instead, please report security bugs to **info@erikpoehler.com**. We acknowledge all reports within 48 hours and will keep you informed of our progress as we work on a fix.
Only if you should feel, that we haven't addressed the issue appropriately, go ahead and report it via Github's [Security Advisories](https://docs.github.com/en/code-security/security-advisories/security-advisories-about-github-security-advisories) feature.
