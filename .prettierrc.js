/**
 * @see https://prettier.io/docs/configuration
 * @type {import("prettier").Config}
 */
const config = {
    trailingComma: "es5",
    tabWidth: 4,
    semi: false,
    singleQuote: true,
    plugins: ["@zackad/prettier-plugin-twig"],
};

module.exports = config;
