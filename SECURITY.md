# Security policy

Never commit SmartFormify account credentials, integration secrets, or private API keys. A browser submission URL is public configuration, not a credential; apply endpoint domain restrictions and regenerate a submit key if it is abused.

These examples must not collect passwords, authentication details, API keys, banking data, government IDs, or sensitive medical data. Keep server-only secrets out of browser code. Report repository security issues privately to the maintainers rather than including proof-of-concept secrets in an issue.
