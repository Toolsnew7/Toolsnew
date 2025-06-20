const express = require('express');
const cors = require('cors');
const { nanoid } = require('nanoid');
const app = express();

// Middleware
app.use(cors());
app.use(express.json());

// In-memory storage (replace with a database in production)
const urlDatabase = new Map();
const analyticsDatabase = new Map();

// Generate a short URL
app.post('/shorten', (req, res) => {
    const { longUrl, customAlias } = req.body;

    if (!longUrl) {
        return res.status(400).json({ error: 'URL is required' });
    }

    try {
        new URL(longUrl); // Validate URL
    } catch (error) {
        return res.status(400).json({ error: 'Invalid URL' });
    }

    let shortId;
    if (customAlias) {
        if (urlDatabase.has(customAlias)) {
            return res.status(400).json({ error: 'Custom alias already in use' });
        }
        shortId = customAlias;
    } else {
        shortId = nanoid(6);
    }

    const shortUrl = `https://toolsnew.com/s/${shortId}`;
    urlDatabase.set(shortId, {
        longUrl,
        createdAt: new Date(),
        clicks: 0,
        uniqueVisitors: new Set()
    });

    res.json({ shortUrl });
});

// Redirect to original URL
app.get('/s/:shortId', (req, res) => {
    const { shortId } = req.params;
    const urlData = urlDatabase.get(shortId);

    if (!urlData) {
        return res.status(404).json({ error: 'URL not found' });
    }

    // Update analytics
    urlData.clicks++;
    urlData.uniqueVisitors.add(req.ip);

    res.redirect(urlData.longUrl);
});

// Get analytics
app.get('/analytics/:shortId', (req, res) => {
    const { shortId } = req.params;
    const urlData = urlDatabase.get(shortId);

    if (!urlData) {
        return res.status(404).json({ error: 'URL not found' });
    }

    // Generate some sample analytics data
    const analytics = {
        totalClicks: urlData.clicks,
        uniqueVisitors: urlData.uniqueVisitors.size,
        countries: Math.floor(Math.random() * 50) + 1,
        dates: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        clicks: Array.from({length: 7}, () => Math.floor(Math.random() * 100))
    };

    res.json(analytics);
});

// Start server
const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
    console.log(`URL Shortener API running on port ${PORT}`);
}); 