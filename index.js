const puppeteer = require('puppeteer')

async function scrape(){
    const browser = await puppeteer.launch();
    const page = await browser.newPage();
    await page.goto('https://www.urbandictionary.com/browse.php?character=A');
    // #ud-root > div > main > div > div.flex.flex-col.lg\:flex-row.mx-0.gap-4 > section > div.bg-white.dark\:bg-yankees.p-5.mb-5.rounded-md > ul > li:nth-child(1) > a
    let element = await page.waitForSelector('#ud-root > div > main > div > div.flex.flex-col.lg\:flex-row.mx-0.gap-4 > section > div.bg-white.dark\:bg-yankees.p-5.mb-5.rounded-md > ul > li:nth-child(1) > a')
    let text = await page.evaluate(element=>element.textContent,element)
    console.log(text)

    browser.close();
}
scrape()