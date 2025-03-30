/**
 * @see https://prettier.io/docs/configuration
 * @type {import("prettier").Config}
 */
const config = {
    trailingComma: "es5",
    tabWidth: 4,
    semi: false,
    singleQuote: true,
    plugins: ["@ttskch/prettier-plugin-tailwindcss-anywhere", "prettier-plugin-tailwindcss", "@zackad/prettier-plugin-twig-melody"],
};

module.exports = config;
